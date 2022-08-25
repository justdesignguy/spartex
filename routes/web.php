<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('front.home');
    })->name('home');
    Route::get('/about', function () {
        return view('front.about');
    })->name('about_page');
    Route::get('/signup', function () {
        return view('front.signup');
    })->name('signup_page');
    Route::get('/signupform', function () {
        return view('front.signupform');
    })->name('signupform_page');
    Route::get('/explore', function () {
        return view('front.explore');
    })->name('explore_page');

    /*******************Admin Login ************************/
    Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('admin/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');

    /*******************Admin Login ************************/
    Route::get('login', [UserAuthController::class, 'index'])->name('user.login');
    Route::post('authenticate', [UserAuthController::class, 'authenticate'])->name('user.authenticate');
    Route::get('register', [UserAuthController::class, 'register'])->name('user.register');
    Route::post('user/store', [UserAuthController::class, 'store'])->name('user.store');
    Route::get('logout', [UserAuthController::class, 'logout'])->name('user.logout');

    Route::get('user/forgot-password', [UserAuthController::class, 'forgotUserPassword'])->name('user.forgot_password');
    Route::post('user/forgot-password/send-mail', [UserAuthController::class, 'sendForgotPasswordMail'])->name('user.forgot_password.send_mail');
    Route::get('user/reset-password/{token}', [UserAuthController::class, 'resetUserPassword'])->name('user.reset_password');
    Route::post('user/reset-password', [UserAuthController::class, 'resetPasswordStore'])->name('user.reset_password.store');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('users/export', [UserController::class, 'export'])->name('users_export');

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
    });
});
