<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    public static function  index()
    {
        return view("pages.login");
    }
    public static function loginValidate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')->with('status', 'Login succesfull!!');
        }
        return redirect('/')->with('error', 'oppes! You have entered invalid credentials');
    }
}
