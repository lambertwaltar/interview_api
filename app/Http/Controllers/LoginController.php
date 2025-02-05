<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function username()
    {
        return 'username';
    }
    
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    //Handle Login Process
    public function processUserLogin(Request $request){
        // $credentials = $request->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);
        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->with('success','You have successfully logged in!');
        }

        return back()->with('error','Your provided credentials do not match in our records.')->onlyInput('username');
    }

    // show dashboard if logged in
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dashboard');
        }
        
        return redirect()->route('show_login_form')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    } 

    // End user sessions and redirect to login page
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show_login_form')
            ->with('success','You have logged out successfully!');;
    }    
}
