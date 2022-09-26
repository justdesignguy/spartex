<?php

namespace App\Http\Controllers;

use App\Mail\UserResetPassword;
use App\Models\Country;
use App\Models\PasswordResets;
use App\Models\User;
use App\Services\EmailService;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function index()
    {
        if (auth()->user()) return redirect()->route('home');
        return view('front.auth.login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function register()
    {
        if (auth()->user()) return redirect()->route('home');
        return view('front.auth.register_landing');
    }

    public function registerForm()
    {
        if (auth()->user()) return redirect()->route('home');
        $countries = Country::pluck('name', 'id')->toArray();
        $countryWiseLength = json_encode(Country::pluck('length', 'id')->toArray());
        return view('front.auth.register_form', compact('countries', 'countryWiseLength'));
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $validator = Validator::make($requestData, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->messages()->all()[0]);
        }
        $user = User::create($requestData);

        $emailData = ['URL' => route('admin.user_detail', $user->id), 'NAME' => $user->name, 'EMAIL' => $user->email];
        $this->emailService->sendEmailToUser($requestData['email'], 'register_thank_you_mail', $emailData);
        $this->emailService->sendEmailToUser(env('ADMIN_MAIL'), 'register_details_mail_to_admin', $emailData);
        return redirect()->route('user.login')->with('success', 'Registration Successfully');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


    public function forgotUserPassword(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        if (auth()->user()) return redirect()->route('home');
        return view('front.auth.forgot_password');
    }

    public function sendForgotPasswordMail(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        DB::beginTransaction();
        try {
            $requestData = $request->except('_token');
            $token = Str::random(15);
            $user = User::where('email', $requestData['email'])->first();
            if (isset($user)) {
                $emailData = array('email' => $requestData['email'], 'token' => $token, 'created_at' => Carbon::now());
                $emailExist = PasswordResets::where('email', $requestData['email'])->first();
                if (isset($emailExist)) {
                    PasswordResets::where('email', '=', $requestData['email'])->update($emailData);
                } else {
                    PasswordResets::create($emailData);
                }

                $emailData = ['NAME' => $user->name, 'URL' => route('user.reset_password', $token)];
                $this->emailService->sendEmailToUser($user->email, 'reset_password_mail', $emailData);
                DB::commit();
                return redirect()->route('user.login')->with('success', 'Please check your email.');
            } else {
                DB::rollBack();
                return redirect()->back()->with('error', 'User does not exist.');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function resetUserPassword($token): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $tokenData = PasswordResets::where('token', $token)->first();
        if (isset($tokenData)) {
            return view('front.auth.reset_password', compact('tokenData'));
        } else {
            return redirect()->route('user.forgot_password')->with('error', 'Reset Password link was expired. Please retry your forgot password process.');
        }
    }

    public function resetPasswordStore(Request $request): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->except('_token');
        $user = User::where('email', $requestData['email'])->first();
        $user->update(['password' => $requestData['password']]);
        return redirect()->route('user.login')->with('success', 'Password reset successfully. Please try to login with new password.');
    }
}
