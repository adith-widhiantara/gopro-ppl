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
        return 'Password Salah';
    }

  public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return view('admin.welcome');
        }else if (Auth()->user()->role == 'user') {
            return view('welcome');
        }
    }
}
