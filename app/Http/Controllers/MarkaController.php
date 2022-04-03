<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Http\Requests\MarkaRequest;
use App\Models\City;
use App\Models\Marka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarkaController extends Controller
{
    public function index()
    {
        return view('admin.marka.index')->with([
            'markas' => Marka::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.marka.edit')->with([
            'action' => route('marka.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    public function store(MarkaRequest $request)
    {
        $validated = $request->validated();
        $image_path = 'marka/' . time() . '.' . $request->file('image')->extension();

        $request->file('image')->storeAs('public', $image_path);

        $validated['image'] = $image_path;
        $marka     = Marka::create($validated);
        return redirect()->route('marka.index')
                         ->with('success', "Marka {$marka->getAttribute('name')} created successfully! ");
    }

    public function show(Marka $marka)
    {
        return view('admin.marka.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $marka
        ]);
    }

    public function edit( Marka $marka)
    {
        return view('admin.marka.edit')->with([
            'action' => route('marka.update', $marka),
            'method' => 'PUT',
            'data'   => $marka,
        ]);
    }

    public function update(MarkaRequest $request, Marka $marka)
    {
        $validate = $request->validated();
        $old_image = $request->old_image;
        if($request->hasFile('image')){
            $image_path = 'marka/' . time() . '.' . $request->file('image')->extension();

            $request->file('image')->storeAs('public', $image_path);

            $validate['image'] = $image_path;
            Storage::disk('public')->delete($old_image);
            $marka->update($validate);
            return redirect()->route('marka.index')
                         ->with('success', "Marka {$marka->getAttribute('name')} updated");
        }else{
            $marka->update([
                'name' => $request->name
            ]);
            return redirect()->route('marka.index')
                         ->with('success', "Marka {$marka->getAttribute('name')} updated");
        }


    }

    public function destroy($id)
    {
        $image = Marka::find($id);
        $old_image = $image->image;
        Storage::disk('public')->delete($old_image);
        Marka::find($id)->delete();
        return redirect()->route('marka.index')
            ->withSuccess(__('Marka delete successfully.'));
    }
}
