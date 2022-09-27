<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactRequest;
use App\Models\Newsletter;
use App\Models\Product;
use App\Services\EmailService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function explore(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('front.explore', compact('categories'));
    }

    public function categoryDetail($slug): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $category = Category::where('slug', $slug)->first();
        if (isset($category)) {
            if ($category->layout_type == 'fabric'){
                $rangeOfProducts = Product::whereHas('categoryDetail', function ($q){
                    $q->where('layout_type', 'fabric');
                })->where(['category_id' => $category->id, 'type' => 'range_product'])->get();
                $typeOfProducts = Product::whereHas('categoryDetail', function ($q){
                    $q->where('layout_type', 'fabric');
                })->where(['category_id' => $category->id, 'type' => 'type_product'])->get();
                return view('front.category_fabric_layout', compact('rangeOfProducts', 'typeOfProducts'));
            }else{
                $products = Product::whereHas('categoryDetail', function ($q){
                    $q->where('layout_type', 'garment');
                })->where(['category_id' => $category->id, 'type' => 'range_product'])->get();
                return view('front.category_garment_layout', compact('products'));
            }
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

    public function contactStore(Request $request): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->except('_token');
        $contactRequest = ContactRequest::create($requestData);

        $emailData = [
            'URL' => route('admin.contact_request_detail', $contactRequest->id),
            'NAME' => $contactRequest->first_name . ' ' . $contactRequest->last_name,
            'EMAIL' => $contactRequest->email,
            'MESSAGE' => $contactRequest->message,
        ];
        $this->emailService->sendEmailToUser($requestData['email'], 'contact_request_thank_you_mail', $emailData);
        $this->emailService->sendEmailToUser(env('ADMIN_MAIL'), 'contact_request_details_mail_to_admin', $emailData);
        return redirect()->back()->with('success', 'Your Contact Request Received.');
    }
}
