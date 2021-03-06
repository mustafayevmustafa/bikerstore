<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        //dd ($request->all());
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.home')->with('errors','Parol ve ya sifre sehvdir');
        }else{
            return back()->withErrors('Login və ya Parol səhvdir');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}
