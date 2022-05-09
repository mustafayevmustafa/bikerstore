<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biker;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Fuel;
use App\Models\Marka;
use App\Models\Reklam;
use App\Models\Pattern;
use App\Models\Ban;
use DB;
class SearchController extends Controller
{
    public function index()
    {
        $biker = Biker::with('marka')->get();

        $bikers = Biker::select('description')->get();
        //dd($biker);
        $data = [];
        foreach ($bikers as $biker) {
            $data[] = $biker['description'];
        }
        return $data;
    }

    /*
    public function search(Request $request)
    {
        $search = $request->marka_name;
        if($search != ''){
            $biker = Biker::where('description','LIKE','%$search%')->first();
            if($biker){
                return redirect('detail/'.$biker->id);
            }
        }else{
            return redirect()->back();
        }
    }
    */

    public function search(Request $request) {
        //dd('OK');
        //$query = $request->query;
        //$id = $request->id;

        $bikers =Biker::join('markas','bikers.marka_id','=','markas.id')
        ->where('markas.name','LIKE',$request->marka_id)
        ->select('bikers.*','bikers.image as bikerimage','markas.name',)
        ->get();
         //dd($bikers);
        //bunlar bele abim /men yemeye getmelyem abim..nus olsun opurem/hadi ugurarl
        //Biker modelini ishletdik deye uje shekili birinci tableden goturur ama istesek her iki shekilide ishledek ondak
        //men bu sorgunu asagida etmisdim..bele yox ama oxsar..burda da yoxladim ama selectden sonra yazmisdim..eyni seyi edirdi
      // dd($bikers);//bikerimage //onu o edib/bura qederi okaydir?aha bide shekil meselesi
        //senin sorgun bunu getirirdi ve duz getirir/sadece bunu elave etmek lazimdirki sorgu gonderende namenin adini axtarda
        //bilmirem..ama bikerde name sutunu yoxdu..gelen sekil de markanin seklidi
        //sen burda join edende iki tablede reshkil sutunu eynidir deye marka bikerin imageini usteleyir ve biri gorunur
        //$bikers = Biker::get();
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        //$bikers = Biker::where('description','like','%'.$request->input('query').'%')->get();
        $reklam = Reklam::first();
        $bans = Ban::first();
        // if($request->marka_id){
        //     $bikers = Biker::where('marka_id','LIKE','%'.$request->marka_id.'%')->get();
        // }fso abim ..bir dene buna bax seherler ve ban novu demisdin ..mence onlar islek idi ..girim bax
        return view('front.search.search',compact('cities','markas','patterns','bikers','reklam','bans'));
    // get the search term
    // $text = $request->input('marka_name');

    // // search the members table
    // $patients = DB::table('bikers')->where('description', 'Like', '%'.$text.'%')->get();

    // if($patients){
    //     return view();
    // }else{
    //     return 'yoxdu';
    // }

    // // return the results
    // return response()->json($patients);

    }



    public function markaSearch(Request $request){

        $bikers = Biker::filter()
            ->join('cities','bikers.city_id','=','cities.id')
            ->select('bikers.*','bikers.image as bikerimage','cities.name',)
            ->get();
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        $reklam = Reklam::first();
        $bans = Ban::first();


        //return dd($result);
        return view('front.search.index',compact('cities','markas','patterns','bikers','reklam','bans'));


    }




    public function oldmarkaSearch(Request $request)
    {
        //dd('OK');
        //$marka_name = $request->marka;

        //return dd($request->marka);

        if($request->city){
            //return dd($request->city);
            $bikers =Biker::join('cities','bikers.city_id','=','cities.id')
            ->where('cities.name','LIKE',$request->city)
            ->select('bikers.*','bikers.image as bikerimage','cities.name',)
            ->get();
        }
        if($request->kredit != null ){
            $bikers = Biker::where('credit',1)->select('bikers.*','bikers.image as bikerimage')->get();
        }
        if($request->barter != null ){
            $bikers = Biker::where('barter',1)->select('bikers.*','bikers.image as bikerimage')->get();
        }


        if($request->marka && $request->city){
            $bikers =Biker::join('markas','bikers.marka_id','=','markas.id')
            ->join('cities','bikers.city_id','=','cities.id')
            ->where('markas.name','LIKE',$request->marka)
            ->where('cities.name','LIKE',$request->city)
            ->select('bikers.*','bikers.image as bikerimage','markas.name',)
            ->select('bikers.*','bikers.image as bikerimage','cities.name',)
            ->get();
        }
        if($request->model && $request->city){
            //return dd($request->model);
            $bikers =Biker::join('patterns','bikers.pattern_id','=','patterns.id')
            ->join('cities','bikers.city_id','=','cities.id')
            ->where('patterns.name','LIKE',$request->model)
            ->where('cities.name','LIKE',$request->city)
            ->select('bikers.*','bikers.image as bikerimage','patterns.name',)
            ->select('bikers.*','bikers.image as bikerimage','cities.name',)
            ->get();
        }
        if($request->marka && $request->model && $request->city){
            $bikers =Biker::join('markas','bikers.marka_id','=','markas.id')
            ->join('patterns','bikers.pattern_id','=','patterns.id')
            ->join('cities','bikers.city_id','=','cities.id')
            ->where('markas.name','LIKE',$request->marka)
            ->where('patterns.name','LIKE',$request->model)
            ->where('cities.name','LIKE',$request->city)
            ->select('bikers.*','bikers.image as bikerimage','markas.name',)
            ->select('bikers.*','bikers.image as bikerimage','patterns.name',)
            ->select('bikers.*','bikers.image as bikerimage','cities.name',)
            ->get();
        }
        if($request->marka){
            $bikers =Biker::join('markas','bikers.marka_id','=','markas.id')
            ->where('markas.name','LIKE',$request->marka)
            ->select('bikers.*','bikers.image as bikerimage','markas.name',)
            ->get();
        }
        if($request->model){
            //return dd($request->model);
            $bikers =Biker::join('patterns','bikers.pattern_id','=','patterns.id')
            ->where('patterns.name','LIKE',$request->model)
            ->select('bikers.*','bikers.image as bikerimage','patterns.name',)
            ->get();
        }
        if($request->marka && $request->model){
            $bikers =Biker::join('markas','bikers.marka_id','=','markas.id')
            ->join('patterns','bikers.pattern_id','=','patterns.id')
            ->where('markas.name','LIKE',$request->marka)
            ->where('patterns.name','LIKE',$request->model)
            ->select('bikers.*','bikers.image as bikerimage','markas.name',)
            ->select('bikers.*','bikers.image as bikerimage','patterns.name',)
            ->get();
        }
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        $reklam = Reklam::first();
        $bans = Ban::first();


        //return dd($result);
        return view('front.search.index',compact('cities','markas','patterns','bikers','reklam','bans'));
    }
}
