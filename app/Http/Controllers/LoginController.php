<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

	public function adminLoginForm()
    {
    	return view('auth.admin.login');
    }


    public function adminLogin(Request $request)
    {
    	dd($request);
    }
}
