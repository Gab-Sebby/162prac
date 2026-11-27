<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function log_in(Request $request) { //need to put things in parenthesis if using them in the function
        $incomingFields = $request->validate([
            "usern" => "required", // add more validation fields here after, leaving it alone muna to navigate things easier
            "passw" => "required"
        ]); 
        return view("/home");
    }
}
