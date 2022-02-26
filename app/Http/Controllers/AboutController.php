<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Http\Requests\CityRequest;
use App\Models\About;
use App\Models\City;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index')->with([
            'abouts' => About::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.about.edit')->with([
            'action' => route('about.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    public function store(AboutRequest $request)
    {
        $validated = $request->validated();
        $about      = About::create($validated);
        return redirect()->route('about.index')
                         ->with('success', "About {$about->getAttribute('name')} created successfully! ");
    }

    public function show(About $about)
    {
        return view('admin.about.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $about
        ]);
    }

    public function edit(About $about)
    {
        return view('admin.about.edit')->with([
            'action' => route('about.update', $about),
            'method' => 'PUT',
            'data'   => $about,
        ]);
    }

    public function update(AboutRequest $request, About $about)
    {
        $validate = $request->validated();
        $about->update($validate);

        return redirect()->route('about.index')
                         ->with('success', "About {$about->getAttribute('title')} updated");
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')
            ->withSuccess(__('About delete successfully.'));
    }
}
