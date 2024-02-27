<?php

namespace App\Http\Controllers;

use App\Mail\MyTestEmail;
use App\Models\testUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class registerMailTrap extends Controller
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
       $test = new testUser();
       $test->email = $request->email;
       $test->password = Hash::make($request->password);
       $test->save();
    
       $name = $request->email;

       Mail::to($request->email)->send(new MyTestEmail($name));
       return view('welcomes', [
            'name' => $name
       ]);
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
