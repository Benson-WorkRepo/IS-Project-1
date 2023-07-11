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
    function loginPost(Request $request){
        $request->validate([
            'IDNumber' =>'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('idNumber','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route(homepage));
        }
        return redirect(route('login'))->with("error", "invalid credentials");

    }
}
