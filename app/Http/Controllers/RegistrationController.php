<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    
    public function showRegistrationForm(){
        return view('auth.registration');
    }

    public function processRegistration(Request $request){

        //Validate user information
        // $request->validate([
        //     'first_name' => 'required|string|max:250',
        //     'surname' => 'required|string|max:250',
        //     'phone_number' => 'required|string|max:250',
        //     'email' => 'required|email|max:250|unique:users',
        //     'username' => 'required|string|max:250',
        //     'password' => 'required|min:8|confirmed'
        // ]);

        // Create user using model
        User::create([
            'first_name' => $request->first_name,
            'surname' => $request->surname,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'username' => $request->username,
            'year'=> $request->year,
            'password' => Hash::make($request->password)
        ]);

        //Log in user after registration
        // $credentials = $request->only('username', 'password');
        // Auth::attempt($credentials);
        // $request->session()->regenerate();
        return redirect()->route('show_login_form')
        ->withSuccess('You have successfully registered, please logged in!');
    }
}
