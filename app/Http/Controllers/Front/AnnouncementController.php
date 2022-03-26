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
use App\Models\Reklam;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;
class AnnouncementController extends Controller
{
    public function create()
    {
        return view('front.biker.edit')->with([
            'action'         => route('announcement.store'),
            'method'         => null,
            'markas'         => Marka::get(),
            'models' => Pattern::get(),
            'categories' => Category::get(),
            'colors' => Color::get(),
            'cities' => City::get(),
            'fuels' => Fuel::get(),
            'biker' => Biker::all(),
            'reklam' => Reklam::first()
        ]);
    }

    public function store(BikerRequest $request): RedirectResponse
    {

        $validated = $request->validated();
//        $validated['vat_included'] = $request->has('vat_included');
        $generators = Biker::create($validated);
//        $generators->movieTypes()->attach($request->input('movie_types'));
//        $generators->contents()->attach($request->input('contents'));
//        $generators->weekDays()->attach($request->input('week_days'));
//        $generators->cinemas()->attach($request->input('cinemas'));

        return redirect()->route('announcement.create')->with('success', "Promo Code Generation created successfully!");
    }

}
