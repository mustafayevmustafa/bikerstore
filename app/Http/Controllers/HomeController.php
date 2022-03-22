<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marka;
class HomeController extends Controller
{
   
    public function index()
    {
        
        return view('admin.index');
    }

    
}
