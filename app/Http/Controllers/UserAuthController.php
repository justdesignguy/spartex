<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
