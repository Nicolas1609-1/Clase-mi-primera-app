<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|min:3|max:100',
        'description' => 'required|min:3'
    ]);

    Category::create([
        'name' => $request->name,
        'description' => $request->description
    ]);

    return redirect()->route('admin.categories.index');
}

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
{
    $request->validate([
        'name' => 'required|min:3|max:100',
        'description' => 'required|min:3'
    ]);

    $category->update([
        'name' => $request->name,
        'description' => $request->description
    ]);

    return redirect()->route('admin.categories.index');
}
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }

}
