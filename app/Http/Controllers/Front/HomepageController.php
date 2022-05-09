<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Biker;
use App\Models\City;
use App\Models\Marka;
use App\Models\Reklam;
use App\Models\Ban;
use App\Models\Pattern;
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
            'reklam'   => Reklam::first(),
            'bans'      => Ban::get(),
            'patterns'  => Pattern::get()
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
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        //$reklam = Reklam::first();
        //elanda sadece bir dene shekil var hee?aha coxlu sekil etmemisik.hee dogrudur 
        //shekili ederem sonra ederik slideri.yada siz edenden sinra ))sen indi indexe bax bir dene
        $bans = Ban::first();
        return view('front.detail',compact('biker','reklam','cities','markas','patterns','bans'));
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
