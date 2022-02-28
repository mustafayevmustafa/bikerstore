<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function ad()
    {
        return view('front.ad');
    }

    public function listing()
    {
        return view('front.listing');
    }

    public function login()
    {
        return view('front.login');
    }

    public function register()
    {
        return view('front.register');
    }
}
