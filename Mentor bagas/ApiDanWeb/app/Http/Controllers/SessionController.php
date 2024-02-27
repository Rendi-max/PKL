<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function Login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = Auth::attempt($credentials);
        if ($user) {
           $request->session()->regenerate();
           $request->session()->regenerateToken();
           return redirect()->intended('dashboard');
        }
    }
    function Logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect("/");
    }

    function Register(Request $request){
        
    }
}
