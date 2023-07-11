<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signInFunction extends Controller
{
    function login(){
        return view('login');
    }
    function signup(){
        return view('signup');
    }
    function adminlogin(){
        return view('adminlogin');
    }
}
