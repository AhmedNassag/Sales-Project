<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show_login_view()
    {
        return view('admin.auth.login');
    }


    public function login(LoginRequest $request)
    {
        if(auth()->guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return redirect()->route('admin.dashboard');
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.showlogin');
    }
}
