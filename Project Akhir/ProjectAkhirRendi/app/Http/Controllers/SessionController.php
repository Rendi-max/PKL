<?php

namespace App\Http\Controllers;

use App\Helper\CreateLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function indexLogin()
    {
        return view('Session.Login');
    }
    public function Login(Request $request)
    {
        $credentials = $request->validate(['email' => 'required', 'password' => 'required']);
        if (Auth::attempt($credentials)) {
            $isAdmin = User::where('email', $request->email)->value('isAdmin');
            $status = User::where('email', $request->email)->value('status');
            if ($status == "is Active") {
                if ($isAdmin == 1) {
                    $request->session()->regenerate();
                    $request->session()->regenerateToken();
                    CreateLog::createLogActivity("Login");
                    return redirect('/dashboard');
                }
                else
                {
                    $request->session()->regenerate();
                    $request->session()->regenerateToken();
                    return redirect('/dashboardUser');
                }
            }
            else
            {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back();
            }
        }
        else
        {
            return back();
        }
    }
    public function indexRegister()
    {
        return view('Session.Register');
    }
    public function Register(Request $request)
    {
        $request->validate([
            'name'                  => 'required|min:5',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:8',
            'passwordConfirmation'  => 'required|min:8',
        ],
        [
            'name'                  => "The field name length must be min 5!",
            'email'                 => "The email address already taken!",
            'password'              => "The field password length must be min 8!",
            'passwordConfirmation'  => "The field password confirmation length must be min 8!",
        ]);

        if ($request->password == $request->passwordConfirmation) {
            $user = new User;
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();            
            Auth::login($user);
            return back();
        }else
        {
            return back()->with('error', 'Password and password confirmation doesnt match!');
        }
    }
    public function Logout(Request $request)
    {
        $user = User::find(Auth::id());
        if($user->isAdmin == 1) CreateLog::createLogActivity("Logout");
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->guest('/login');
    }
}
