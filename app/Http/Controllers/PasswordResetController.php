<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    public function index()
    {

        return view('form.passwordReset');
    }

    // public function showResetForm(Request $request)
    // {
    //     $token = $request->route()->parameter('token');
    //     $email = $request->email;

    //     return view('form.reset', compact('token','email'));
    // }
}
