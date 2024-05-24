<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefereesRequest;
use App\Models\Referee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function signup(){
        return view('auth.signup');
    }
    public function create(RefereesRequest $request){
        $formFields = $request->validated();
        $password = $request->password;
        $formFields['password'] = Hash::make($password);
        if ($request->photo) {
            $nameImg = $request->file('photo')->getClientOriginalName();
            $formFields['photo'] = $request->file('photo')->storeAs('images', $nameImg, 'public');
        } else {
            $formFields['photo'] = 'images/man.png';
        }
        Referee::create($formFields);

        // Auth::login($referee);
        // return redirect()->route('dashboard')->with('success', 'Welcome Mr. '. (auth()->user()->name));
        return redirect()->route('login.show')->with('success', 'bien ete ajouter. ');


    }
}
