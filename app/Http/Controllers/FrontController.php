<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Newsletter;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function explore(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('front.explore', compact('categories'));
    }

    public function categoryDetail($slug): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $category = Category::where('slug', $slug)->first();
        if (isset($category)) {
            $rangeOfProducts = Product::where(['category_id' => $category->id, 'type' => 'range_product'])->get();
            $typeOfProducts = Product::where(['category_id' => $category->id, 'type' => 'type_product'])->get();
            return view('front.category_detail', compact('rangeOfProducts', 'typeOfProducts'));
        }
        return redirect()->back();
    }

    public function newsletterStore(Request $request): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->all();
        Newsletter::updateOrCreate([
            'email' => $requestData['email']
        ], [
            'email' => $requestData['email'],
            'name' => $requestData['name']
        ]);
        return redirect()->back()->with('success', 'Newsletter Submitted Successfully');
    }
}
