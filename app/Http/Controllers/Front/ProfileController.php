<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reklam;
use App\Models\User;
use App\Models\Biker;

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
