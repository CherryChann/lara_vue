<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

class AccessController extends Controller
{
    public function login()
    {
    	return view('backend.login');
    }

    public function register()
    {
    	return view('backend.register');
    }

    public function dashboard()
    {
    	return view('backend.dashboard');
    }
}
