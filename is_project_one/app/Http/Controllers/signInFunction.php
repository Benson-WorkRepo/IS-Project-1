<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'idNumber' =>'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('idNumber','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route(homepage));
        }
        return redirect(route('login'))->with("error", "invalid credentials");

    }
    function signupPost(Request $request){
      $request->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'phoneNo' => 'required',
        'idNumber' =>'required|unique:users',
        'password' => 'required'
      ]);  
      $data['firstName'] = $request->firstName;
      $data['lastName']  = $request->lastName;
      $data['phoneNo']   = $request->phoneNo;
      $data['idNumber'] = $request->idNumber;
      $data['password'] = Hash::make($request->password); 
      user::create($data);
      if(!$user){
        return redirect(route('signup'))->with("error", "Try Again");
      }
      return redirect(route('login'))->with("Success", "Login with new credentials");

    }
}
