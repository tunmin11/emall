<?php

namespace App\Http\Controllers\Auth\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class LoginController extends DefaultLoginController
{
    public function adminLoginForm()
    {
    	return view('auth.admin.login');
    }


    public function adminLogin(Request $request)
    {
    	dd($request);
    }


    protected $redirectTo = '/employee/home';
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login.employee');
    }
    public function username()
    {
        return 'id';
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
