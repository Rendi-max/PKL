<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $request->session()->regenerateToken();

            if (auth()->user()->level == 1) {
                return redirect('/user');
            }
            if (auth()->user()->level == 2) {
                return redirect('/admin');
            }
            if (auth()->user()->level == 3) {
                return redirect('/superAdmin');
            }
        }else {
            return "Unauthorized";
        }
    }
    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
