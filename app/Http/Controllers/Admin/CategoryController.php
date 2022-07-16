<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCategory;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.categories.create');
    }

    public function store(ValidateCategory $request): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->all();
        Category::create($requestData);
        return redirect()->route('admin.categories')->with('success', 'Data Created Successfully.');
    }

    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(ValidateCategory $request, $id): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->except('_token');
        Category::where('id', $id)->update($requestData);
        return redirect()->route('admin.categories')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        Category::destroy($id);
        return redirect()->route('admin.categories')->with('success', 'Data Deleted Successfully.');
    }
}
