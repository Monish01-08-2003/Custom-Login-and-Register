<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class mainController extends Controller
{
    public static function index()
    {
        if (Auth::check()) {
            return view('pages.home')->with('status', 'successfull');
        }
        return view("pages.login");
    }
    public static function logout()
    {
        FacadesSession::flush(); // Clear all session data
        Auth::logout();           // Log the user out
        return redirect('/login'); // Optionally, redirect to the login page
    }
}
