<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\BikerRequest;
use App\Models\Biker;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Fuel;
use App\Models\Marka;
use App\Models\Pattern;
use Illuminate\Http\Request;
use Auth;
class AnnouncementController extends Controller
{
    public function index()
    {
        return view('front.announcement')->with([
            'markas' => Marka::get(),
            'models' => Pattern::get(),
            'categories' => Category::get(),
            'colors' => Color::get(),
            'cities' => City::get(),
            'fuels' => Fuel::get(),
            'biker' => Biker::all(),
        ]);
    }

    public function save(BikerRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
        $biker     = Biker::create($validated);
//        return redirect()->route('front.announcement')
//            ->with('success', "Announcement  created successfully! ");
    }

}
