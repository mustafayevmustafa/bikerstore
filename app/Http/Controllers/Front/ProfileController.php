<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reklam;
use App\Models\User;
use App\Models\Biker;
use App\Models\City;
use App\Models\Marka;
use App\Models\Pattern;
use App\Http\Requests\ProfilRequest;
use Illuminate\Support\Facades\Storage;
use Validator;
use Auth;
class ProfileController extends Controller
{
    public function index()
    {
        $user = User::first();
        $reklam = Reklam::first();
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        return view('front.profil.index',compact('reklam','user','cities','markas','patterns'));
    }



     public function hesab()
    {
        $user = User::first();
        $reklam = Reklam::first();
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        return view('front.profil.hesab_duzelis',compact('reklam','user','cities','markas','patterns'));
    }


    public function profilUpdate(Request $request, User $user)
    {
        //return $request->all();
        
        $validate[] = Validator::make($request->all(), [
            'name'   => 'required',
            'surname' => 'required',
            //'phone'    => 'required',
            'email'    => 'required',
            //'adress'   => 'required',
            'image'   => 'mimes:png,jpg,jpeg'
    ]);
    
        //$validate = $request->validated();
        //dd($validate);
        $user = User::find(Auth::user()->id);
        //return $user->name;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->adress = $request->adress;
        $user->phone = $request->phone;
        $user->email = $request->email;


        $old_image = $request->old_image;
        //return $user;
        if($request->hasFile('image')){
            // $fileName = 'image'.time().'.'.$request->image->extension();
            // $fileNameWithUpload = 'user/'.$fileName;
            // $request->image->storeAs('public',$fileName);
            // $setting->image = $fileNameWithUpload;
            
            $image_path = 'user/' . time() . '.' . $request->file('image')->extension();

            $request->file('image')->storeAs('public', $image_path);

           $validate['image'] = $image_path;
            
            
            Storage::disk('public')->delete($old_image);
            $user->update($validate);
            
            return redirect()->back();
        }else{
            $user->update([
                'name'   => $request->name,
                'surname' => $request->surname,
                'email'   => $request->email,
                'phone' => $request->phone,
                'adress' => $request->adress
            ]);
            return redirect()->back();
        }
    }

     public function elan()
    {
        $bikers = Biker::where('user_id',Auth::user()->id)->paginate(10);
        $user = User::first();
        $reklam = Reklam::first();
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        return view('front.profil.elan',compact('reklam','user','cities','markas','patterns','bikers'));
    }

     public function odenis()
    {
        $user = User::first();
        $reklam = Reklam::first();
        $cities = City::get();
        $markas = Marka::get();
        $patterns = Pattern::get();
        return view('front.profil.odenis',compact('reklam','user','cities','markas','patterns'));
    }
}
