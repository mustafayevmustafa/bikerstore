<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Marka;
use App\Models\Pattern;
use App\Models\Reklam;
use App\Models\Biker;
use App\Models\Ban;
use DB;
class CitiesController extends Controller
{
    public function index(Request $request,$id)
    {
        //$cities  = City::orderBy('created_at','ASC')->get();
        //$biker = Biker::where('city_id',$id)->get();
        $id = $request->id;
        $cities = City::get();
        //$id = $cities->id;
        $markas = Marka::get();
        //return $cities->name;
        $patterns = Pattern::get();
        $bikers = Biker::where('city_id',$id)->get();
        
        $reklam = Reklam::first();
        //$city = DB::table('cities')->join('bikers', 'cities.id', '=', 'bikers.city_id');
        return view('front.city.index',compact('cities','markas','patterns','bikers','reklam'));
        /*
         return view('front.city.index')->with([
            'markas'         => Marka::get(),
            'patterns'         => Pattern::get(),
            //'categories'     => Category::get(),
            //'colors'         => Color::get(),
            'cities'         => City::get(),
            'bikers'          => Biker::get(),
            'reklam'         => Reklam::first()
        ]);
        */
    }

    public function ban(Request $request,$id)
    {
        //$cities  = City::orderBy('created_at','ASC')->get();
        //$biker = Biker::where('city_id',$id)->get();
        $id = $request->id;
        $cities = City::get();
        //$id = $cities->id;
        $markas = Marka::get();
        //return $cities->name;
        $patterns = Pattern::get();
        $bans  = Ban::get();
        $bikers = Biker::where('ban_id',$id)->get();
        
        $reklam = Reklam::first();
        //$city = DB::table('cities')->join('bikers', 'cities.id', '=', 'bikers.city_id');
        return view('front.ban.index',compact('cities','markas','patterns','bikers','reklam','bans'));
    }
}
