<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Form Register',
            'active' => 'register',
        ]);
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|max:255|min:5|unique:users',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:4|max:16'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/')->with('success', 'Register Success ! ');
    }
}
