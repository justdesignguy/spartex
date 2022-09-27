<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\EmailTemplateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('front.home');
    })->name('home');
    Route::get('/about', function () {
        return view('front.about');
    })->name('about_page');
    Route::get('/terms_and_conditions', function () {
        return view('front.terms_and_conditions');
    })->name('terms_and_conditions_page');
    Route::get('/policies', function () {
        return view('front.policies');
    })->name('policies_page');


    /*******************Admin Login ************************/
    Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('admin/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');

    /*******************Admin Login ************************/
    Route::get('login', [UserAuthController::class, 'index'])->name('user.login');
    Route::post('authenticate', [UserAuthController::class, 'authenticate'])->name('user.authenticate');
    Route::get('register', [UserAuthController::class, 'register'])->name('user.register');
    Route::get('register/form', [UserAuthController::class, 'registerForm'])->name('user.register_form');
    Route::post('user/store', [UserAuthController::class, 'store'])->name('user.store');
    Route::get('/thank-you', function () {
        return view('front.thank-you');
    })->name('user.thank_you');
    Route::get('logout', [UserAuthController::class, 'logout'])->name('user.logout');

    Route::get('user/forgot-password', [UserAuthController::class, 'forgotUserPassword'])->name('user.forgot_password');
    Route::post('user/forgot-password/send-mail', [UserAuthController::class, 'sendForgotPasswordMail'])->name('user.forgot_password.send_mail');
    Route::get('user/reset-password/{token}', [UserAuthController::class, 'resetUserPassword'])->name('user.reset_password');
    Route::post('user/reset-password', [UserAuthController::class, 'resetPasswordStore'])->name('user.reset_password.store');

    Route::get('explore', [FrontController::class, 'explore'])->name('explore');
    Route::get('category/{slug}', [FrontController::class, 'categoryDetail'])->name('category_detail');

    Route::post('newsletter/store', [FrontController::class, 'newsletterStore'])->name('newsletter.store');

    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');
    Route::post('contact/store', [FrontController::class, 'contactStore'])->name('contact.store');
    \Illuminate\Support\Facades\Log::info('web.php');
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['adminAccess']], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('users/export', [UserController::class, 'export'])->name('users_export');
        Route::get('user/detail/{id}', [UserController::class, 'userDetails'])->name('user_detail');
        Route::get('newsletters', [UserController::class, 'newsletterList'])->name('newsletters');
        Route::get('newsletters/export', [UserController::class, 'newsletterExport'])->name('newsletters_export');
        Route::get('contact-requests', [UserController::class, 'contactRequestList'])->name('contact_requests');
        Route::get('contact-requests/export', [UserController::class, 'contactRequestExport'])->name('contact_requests_export');
        Route::get('contact-request/detail/{id}', [UserController::class, 'contactRequestDetails'])->name('contact_request_detail');

        Route::get('categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        Route::get('products', [ProductController::class, 'index'])->name('products');
        Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

        Route::get('email-templates', [EmailTemplateController::class, 'index'])->name('email_templates');
        Route::get('email-template/edit/{id}', [EmailTemplateController::class, 'edit'])->name('email_template.edit');
        Route::post('email-template/update/{id}', [EmailTemplateController::class, 'update'])->name('email_template.update');
    });
});
