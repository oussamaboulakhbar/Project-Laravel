<?php

namespace App\Http\Controllers;

use App\Models\Referee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = $request->email;
        $password = $request->password;
        $user = Referee::where('email', $login);

        if ($user && Auth::attempt(['email' => $login, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'welcome Mr. '. (auth()->user()->fullName ));
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
