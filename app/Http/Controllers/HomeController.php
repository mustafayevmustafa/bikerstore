<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marka;
class HomeController extends Controller
{
   
    public function index()
    {
        $markas = Marka::get();
        return view('admin.index',compact('markas'));
    }

    public function detail()
    {
        return view('front.detail');
    }
}
