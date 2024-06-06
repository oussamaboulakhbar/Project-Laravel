<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefereesRequest;
use App\Models\Referee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RefereesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RefereesRequest $request)
    {
        // * Validtion

        $formFields = $request->validated();
        $password = $request->password;
        $formFields['licenseNum'] = strtolower($request->licenseNum);
        $formFields['password'] = Hash::make($password);

        // dd($formFields);
        // * Insertion^
        Referee::create($formFields);
        // * Redirection
        return redirect()->route('login.show')->with('success', 'a bien été ajouté. '); //session

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Referee $referee)
    {
        return view('myAccount', compact('referee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Referee $referee)
    {
        // Validate request data (you should have your validation rules here)
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Collect all form fields
        $formFields = $request->except(['password', 'photo']); // Exclude password and photo initially

        // Hash the password if it's provided
        if ($request->filled('password')) {
            $formFields['password'] = Hash::make($request->password);
        } else {
            // Remove password from formFields if it's not provided
            unset($formFields['password']);
        }

        // Handle photo upload if provided
        if ($request->hasFile('photo')) {
            $nameImg = $request->file('photo')->getClientOriginalName();
            $formFields['photo'] = $request->file('photo')->storeAs('images', $nameImg, 'public');
        }

        // Update the referee with the collected form fields
        $referee->update($formFields);

        return redirect()->route('referees.edit', $referee->id)->with('success', 'Le profil a bien été modifié.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referee $referee)
    { {
            $name = $referee->fullName;
            $referee->delete();
            Session::flush();
            Auth::logout();
            return redirect()->route('login.show')->with('success', 'Account  ' . $name . ' has deleted ');
        }
    }
}
