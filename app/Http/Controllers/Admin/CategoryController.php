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
        if (isset($requestData['image'])){
            $requestData['image'] = uploadFile($requestData['image'], 'category');
        }
        Category::create($requestData);
        return redirect()->route('admin.categories')->with('success', 'Data Created Successfully.');
    }

    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $category = Category::findOrFail($id);
        if (isset($category)){
            return view('admin.categories.edit', compact('category'));
        }
        return redirect()->back()->with('error', 'Invalid Request');
    }

    public function update(ValidateCategory $request, $id): \Illuminate\Http\RedirectResponse
    {
        $category = Category::where('id', $id)->first();
        $requestData = $request->except('_token');
        if (isset($requestData['image'])){
            $requestData['image'] = uploadFile($requestData['image'], 'category', $category->image);
        }
        $category->update($requestData);
        return redirect()->route('admin.categories')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        Category::destroy($id);
        return redirect()->route('admin.categories')->with('success', 'Data Deleted Successfully.');
    }
}
