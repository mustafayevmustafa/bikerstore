<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Http\Requests\MarkaRequest;
use App\Http\Requests\PatternRequest;
use App\Models\City;
use App\Models\Marka;
use App\Models\Pattern;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Mod;

class PatternController extends Controller
{
    public function index()
    {
        return view('admin.pattern.index')->with([
            'patterns' => Pattern::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.pattern.edit')->with([
            'action' => route('pattern.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    public function store(MarkaRequest $request)
    {
        $validated = $request->validated();
        $pattern     = Pattern::create($validated);
        return redirect()->route('pattern.index')
                         ->with('success', "Pattern {$pattern->getAttribute('name')} created successfully! ");
    }

    public function show(Pattern $pattern)
    {
        return view('admin.pattern.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $pattern
        ]);
    }

    public function edit(Pattern $pattern)
    {
        return view('admin.pattern.edit')->with([
            'action' => route('pattern.update', $pattern),
            'method' => 'PUT',
            'data'   => $pattern,
        ]);
    }

    public function update(PatternRequest $request, Pattern $pattern)
    {
        $validate = $request->validated();
        $pattern->update($validate);

        return redirect()->route('pattern.index')
                         ->with('success', "Model {$pattern->getAttribute('name')} updated");
    }

    public function destroy(Pattern $pattern)
    {
        $pattern->delete();
        return redirect()->route('pattern.index')
            ->withSuccess(__('Model delete successfully.'));
    }
}
