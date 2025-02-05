<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class APIController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest')->except([
        //     'logout', 'dashboard'
        // ]);
    }

    //Search participant by ID
    public function fetchUser($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            return response()->json(['message'=>"user not found"]);
        }
        return response()->json(['user'=>$user]);
    }
}
