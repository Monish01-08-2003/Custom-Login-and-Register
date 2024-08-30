<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public static function index()
    {
        return view('pages.register');
    }
    public static function registerValidate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users', 'email'],
            'password' => 'required'
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if (!$user) {
            return redirect('/registerValidate')->with('error', 'Registration failed !!');
        }
        return redirect('/login')->with('status', 'Registration successfull!!');
    }
}
