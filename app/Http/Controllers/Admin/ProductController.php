<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateProduct;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.create', compact('categories'));
    }

    public function store(ValidateProduct $request): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->except('_token');
        if (isset($requestData['image'])){
            $requestData['image'] = uploadFile($requestData['image'], 'product');
        }
        if (isset($requestData['small_image'])){
            $requestData['small_image'] = uploadFile($requestData['small_image'], 'product');
        }
        Product::create($requestData);
        return redirect()->route('admin.products')->with('success', 'Data Created Successfully.');
    }

    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::findOrFail($id);
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(ValidateProduct $request, $id): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->except('_token');
        $product = Product::findOrFail($id);
        if (isset($requestData['image'])){
            $requestData['image'] = uploadFile($requestData['image'], 'product', $product->image);
        }
        if (isset($requestData['small_image'])){
            $requestData['small_image'] = uploadFile($requestData['small_image'], 'product', $product->small_image);
        }
        $product->update($requestData);
        return redirect()->route('admin.products')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        Product::destroy($id);
        return redirect()->route('admin.products')->with('success', 'Data Deleted Successfully.');
    }
}
