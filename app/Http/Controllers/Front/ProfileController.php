<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reklam;
use App\Models\User;
use App\Models\Biker;
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
        return view('front.profil.index',compact('reklam','user'));
    }



     public function hesab()
    {
        $reklam = Reklam::first();
        $user = User::first();
        return view('front.profil.hesab_duzelis',compact('reklam','user'));
    }


    public function profilUpdate(Request $request, User $user)
    {
        //return $request->all();
        
        $validate[] = Validator::make($request->all(), [
            'name'   => 'required',
            'surname' => 'required',
            'phone'    => 'required',
            'email'    => 'required',
            'adress'   => 'required',
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
        $bikers = Biker::paginate(10);
        $reklam = Reklam::first();
        $user = User::first();
        return view('front.profil.elan',compact('reklam','user','bikers'));
    }

     public function odenis()
    {
        $reklam = Reklam::first();
        $user = User::first();
        return view('front.profil.odenis',compact('reklam','user'));
    }
}
