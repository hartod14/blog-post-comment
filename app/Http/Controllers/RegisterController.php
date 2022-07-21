<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreRegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => "Register"
        ]);
    }

    public function store(StoreRegisterRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = bcrypt($validated['password']);
        
        User::Create($validated);

        return redirect('/login')->with('success','Register has been completed! Please Login');
    }
}
