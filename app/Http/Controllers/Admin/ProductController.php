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
            $requestData['image'] = $this->uploadImage($requestData['image']);
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
            $requestData['image'] = $this->uploadImage($requestData['image'], $product);
        }
        $product->update($requestData);
        return redirect()->route('admin.products')->with('success', 'Data Updated Successfully.');
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        Product::destroy($id);
        return redirect()->route('admin.products')->with('success', 'Data Deleted Successfully.');
    }

    public function uploadImage($file, $product = NULL): string
    {
        $uploadPath = storage_path(Product::IMG_PATH);
        if (isset($product)) {
            $imagePath = $uploadPath . $product->image;
            @unlink($imagePath);
        }
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(11111, 99999) . '.' . $extension;
        $file->move($uploadPath, $fileName);
        return $fileName;
    }
}
