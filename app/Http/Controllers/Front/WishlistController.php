<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Auth;
class WishlistController extends Controller
{
    public function index(Request $request)
    {
        // if($request->ajax()){
        //     $data = $request->all();
        //     print_r($data);
        // }
        $biker_id = $request->biker_id;
        
        if(Wishlist::where('user_id',Auth::guard('web')->id())->where('biker_id',$biker_id)->exists()){
            return response()->json(['status'=>'Biker is already added wishlist']);
        }else{
            $wishlist = new Wishlist;
            $wishlist->user_id = Auth::guard('web')->id();
            $wishlist->biker_id = $biker_id;
            $wishlist->save();
            return response()->json(['status' => 'Biker added wishlist']);
        }
    }
}
