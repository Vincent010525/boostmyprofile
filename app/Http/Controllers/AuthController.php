<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $validation = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        

    }
}
