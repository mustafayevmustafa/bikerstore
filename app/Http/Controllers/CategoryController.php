<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CityRequest;
use App\Http\Requests\MarkaRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Marka;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index')->with([
            'categories' => Category::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.category.edit')->with([
            'action' => route('category.store'),
            'method' => null,
            'data'   => null,
        ]);
    }

    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();
        $category     = Category::create($validated);
        return redirect()->route('category.index')
                         ->with('success', "Category {$category->getAttribute('name')} created successfully! ");
    }

    public function show(Category $category)
    {
        return view('admin.category.edit')->with([
            'method' => null,
            'action' => null,
            'data'   => $category
        ]);
    }

    public function edit( Category $category)
    {
        return view('admin.category.edit')->with([
            'action' => route('category.update', $category),
            'method' => 'PUT',
            'data'   => $category,
        ]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $validate = $request->validated();
        $category->update($validate);

        return redirect()->route('category.index')
                         ->with('success', "Category {$category->getAttribute('name')} updated");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')
            ->withSuccess(__('Category delete successfully.'));
    }
}
