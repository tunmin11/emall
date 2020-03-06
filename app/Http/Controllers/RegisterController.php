<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function adminRegisterForm()
    {
    	return view('auth.admin.register');
    }

    public function registerAdmin(Request $request)
    {
    	dd($request);
    }
}
