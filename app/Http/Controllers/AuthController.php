<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function postlogin(Request $request){
      if (Auth::attempt($request->only('email','password'))) {
        return redirect('/home');
      }
        return redirect('/');
    }

  public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'surveyor') {
            return view('user.surveyor.welcome');
        }else if (Auth()->user()->role == 'investor') {
            return view('welcome');
        }
        else if (Auth()->user()->role == 'petani') {
            return view('welcome');
        }
        else if (Auth()->user()->role == 'sdm') {
            return view('welcome');
        }
    }
}
