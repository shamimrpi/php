<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public function index()
	{
   	 return view('login.login');
	}

	public function confirmLogin(LoginRequest $request){
	 $data = $request->only('email', 'password');

    	
    	/* $data['password'] = Hash::make($data['password']);*/
    	if (Auth::attempt($data)) {
    		return redirect()->intended('admin/posts');
    	} else {
    		return redirect()->route('login')->withErrors(['Invalid Email and password']);
    	}
	}
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
