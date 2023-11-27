<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'sitesetting'], function () {
    Route::get('/', [PageHomeController::class, 'home'])->name('home');

    Route::get('/about', [PageController::class, 'about'])->name('about');

    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contact/create', [AjaxController::class, 'createcontact'])->name('create.contact');

    Route::get('/products', [PageController::class, 'products'])->name('products');
    Route::get('/products/men/{slug?}', [PageController::class, 'products'])->name('menproducts');
    Route::get('/products/women/{slug?}', [PageController::class, 'products'])->name('womenproducts');
    Route::get('/products/children/{slug?}', [PageController::class, 'products'])->name('childrenproducts');

    Route::get('/onsaleproducts', [PageController::class, 'onsaleproducts'])->name('onsaleproducts');

    Route::get('/product/{slug}', [PageController::class, 'productdetail'])->name('productdetail');

    Route::get('/cart', [PageController::class, 'cart'])->name('cart');
});
