<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('pages.login');
    }

    public function postLogin(Request $request)
    {
    	$this->validate($request, ['username' => 'required|','password' => 'required']);
    	$credentials = $request->only('username', 'password');
    	if (Auth::attempt($credentials))
    	{
            // echo Auth::user()->id;
    		return redirect('/') ;
    	}
    	else
    	{
            Auth::logout();
    		// return redirect('/login');
            return redirect('/login')->with('message', 'Gagal Login');
    	}
    }
}
