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
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Auth::guard('web')->id()){
            return view('front.biker.edit')->with([
            'action'         => route('announcement.store'),
            'method'         => null,
            'data'           => new Biker(),
            'markas'         => Marka::get(),
            'models'         => Pattern::get(),
            'categories'     => Category::get(),
            'colors'         => Color::get(),
            'cities'         => City::get(),
            'fuels'          => Fuel::get(),
        ]);;
        }else{
            return redirect()->route('login');
        }
        /*
        return view('front.biker.edit')->with([
            'action'         => route('announcement.store'),
            'method'         => null,
            'data'           => new Biker(),
            'markas'         => Marka::get(),
            'models'         => Pattern::get(),
            'categories'     => Category::get(),
            'colors'         => Color::get(),
            'cities'         => City::get(),
            'fuels'          => Fuel::get(),
        ]); 
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BikerRequest $request): RedirectResponse
    {

        $validated = $request->validated();
        $validated['credit'] = $request->has('credit');
        $validated['barter'] = $request->has('barter');
        $validated['user_id'] = auth()->user()->id ?? 0;

        $image_path = 'biker/' . time() . '.' . $request->file('image')->extension();

        $request->file('image')->storeAs('public', $image_path);

        $validated['image'] = $image_path;
        $generators = Biker::create($validated);

        return redirect()->route('announcement.create')->with('success', "Promo Code Generation created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
