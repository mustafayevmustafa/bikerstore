<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuelRequest;
use App\Models\Fuel;


class FuelController extends Controller
{
    public function index()
    {
        return view('admin.fuel.index')->with([
            'fuels' => Fuel::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.fuel.edit')->with([
            'action' => route('fuel.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    public function store(FuelRequest $request)
    {
        $validated = $request->validated();
        $fuel   = Fuel::create($validated);
        return redirect()->route('fuel.index')
                         ->with('success', "Fuel {$fuel->getAttribute('name')} created successfully! ");
    }

    public function show(Fuel $fuel)
    {
        return view('admin.fuel.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $fuel
        ]);
    }

    public function edit(Fuel $fuel)
    {
        return view('admin.fuel.edit')->with([
            'action' => route('fuel.update', $fuel),
            'method' => 'PUT',
            'data'   => $fuel,
        ]);
    }

    public function update(FuelRequest $request, Fuel $fuel)
    {
        $validate = $request->validated();
        $fuel->update($validate);

        return redirect()->route('fuel.index')
                         ->with('success', "Fuel {$fuel->getAttribute('name')} updated");
    }

    public function destroy(Fuel $fuel)
    {
        $fuel->delete();
        return redirect()->route('fuel.index')
            ->withSuccess(__('Fuel delete successfully.'));
    }
}
