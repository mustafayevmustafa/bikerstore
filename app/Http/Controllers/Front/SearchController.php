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
        return view('front.search',compact('cities','markas','patterns','bikers','reklam','bans'));
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
}
