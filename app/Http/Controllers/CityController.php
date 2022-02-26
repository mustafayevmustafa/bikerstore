<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('admin.city.index')->with([
            'cities' => City::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.city.edit')->with([
            'action' => route('city.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    public function store(CityRequest $request)
    {
        $validated = $request->validated();
        $city      = City::create($validated);
        return redirect()->route('city.index')
                         ->with('success', "City {$city->getAttribute('name')} created successfully! ");
    }

    public function show(City $city)
    {
        return view('admin.city.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $city
        ]);
    }

    public function edit(City $city)
    {
        return view('admin.city.edit')->with([
            'action' => route('city.update', $city),
            'method' => 'PUT',
            'data'   => $city,
        ]);
    }

    public function update(CityRequest $request, City $city)
    {
        $validate = $request->validated();
        $city->update($validate);

        return redirect()->route('city.index')
                         ->with('success', "City {$city->getAttribute('name')} updated");
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('city.index')
            ->withSuccess(__('City delete successfully.'));
    }
}
