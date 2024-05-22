<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }
    public function signup(){
        return view('auth.signup');
    }
    public function login(Request $request)
    {
        $login = $request->email;
        $password = $request->password;
        $list = ['email' => $login, 'password' => $password];
        if (Auth::attempt($list)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'welcom Mr. '. (auth()->user()->fullName ));
        } else {
            return back()->with('error', 'Email or Password incorrect. ')
                // ->withErrors([
                // 'login' => 'Email or Password incorrect.'
                // ])
                ->withInput();
        }
    }
    public function logout(){
        Session::flush();
        Auth::logout() ;
        return redirect()->route('login.show')->with('success', 'You have successfully logged out.');
    }

}
