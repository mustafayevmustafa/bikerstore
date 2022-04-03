<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Biker;
use App\Models\City;
use App\Models\Marka;
use App\Models\Reklam;
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
            'reklam'   => Reklam::first()
        ]);
    }



    public function ad()
    {
        if(Auth::guard('web')->id()){
            //$reklam = Reklam::first();
            return view('front.biker.edit');
        }else{
            return redirect()->route('login');
        }
    }

    public function detail($id)
    {

        $biker = Biker::find($id);
        $reklam = Reklam::first();
        return view('front.detail',compact('biker','reklam'));
    }

    public function listing()
    {
        $reklam = Reklam::first();
        return view('front.listing',compact('reklam'));
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
