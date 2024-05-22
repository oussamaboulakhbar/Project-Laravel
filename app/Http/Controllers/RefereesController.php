<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefereesRequest;
use App\Models\Referee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
