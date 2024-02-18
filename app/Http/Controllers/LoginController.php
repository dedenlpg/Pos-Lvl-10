<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('page.auth.login');
    }

    public function daftar()
    {
        return view('page.auth.daftar');
    }
}
