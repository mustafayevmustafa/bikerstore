<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CityRequest;
use App\Http\Requests\ColorRequest;
use App\Http\Requests\MarkaRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use App\Models\Marka;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        return view('admin.color.index')->with([
            'colors' => Color::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.color.edit')->with([
            'action' => route('color.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    public function store(ColorRequest $request)
    {
        $validated = $request->validated();
        $color    = Color::create($validated);
        return redirect()->route('color.index')
                         ->with('success', "Color {$color->getAttribute('name')} created successfully! ");
    }

    public function show(Color $color)
    {
        return view('admin.color.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $color
        ]);
    }

    public function edit( Color $color)
    {
        return view('admin.color.edit')->with([
            'action' => route('color.update', $color),
            'method' => 'PUT',
            'data'   => $color,
        ]);
    }

    public function update(ColorRequest $request, Color $color)
    {
        $validate = $request->validated();
        $color->update($validate);

        return redirect()->route('color.index')
                         ->with('success', "Color {$color->getAttribute('name')} updated");
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->route('color.index')
            ->withSuccess(__('Color delete successfully.'));
    }
}
