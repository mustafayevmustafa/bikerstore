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

class MarkasController extends Controller
{
    public function index(Request $request,$id)
    {
        $id = $request->id;
        $cities = City::get();
        //$id = $cities->id;
        $markas = Marka::get();
        //return $cities->name;
        $patterns = Pattern::get();
        $bikers = Biker::where('marka_id',$id)->get();
        $bans  = Ban::get();
        $reklam = Reklam::first();
        //$city = DB::table('cities')->join('bikers', 'cities.id', '=', 'bikers.city_id');
        return view('front.index',compact('cities','markas','patterns','bikers','reklam','bans'));
    }
}
