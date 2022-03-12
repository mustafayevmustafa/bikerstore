<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Biker;
use App\Models\City;
use App\Models\Marka;
use Illuminate\Http\Request;
use Auth;
class HomepageController extends Controller
{
    public function index()
    {
        return view('front.index')->with([
            'bikers'   => Biker::get(),
            'cities'   => City::get(),
            'markas'   => Marka::get(),
        ]);
    }

    public function ad()
    {
        if(Auth::guard('web')->id()){
            return view('front.biker.edit');
        }else{
            return redirect()->route('login');
        }
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

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('front.index');
    }
}
