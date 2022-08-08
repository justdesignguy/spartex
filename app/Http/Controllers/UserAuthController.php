<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\UserResetPassword;
use App\Models\PasswordResets;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserAuthController extends Controller
{
    use AuthenticatesUsers;

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
        return view('front.auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        User::create($request->all());
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
                $emailData['reset_link'] = route('user.reset_password', $token);
                $emailData['name'] = $user->name;
                Mail::to($requestData['email'])->send(new UserResetPassword($emailData));
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
