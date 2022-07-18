<?php

use Illuminate\Support\Facades\Route;
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
    });

    /*******************Admin Login ************************/
    Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('admin/authenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');

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
