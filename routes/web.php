<?php

use Illuminate\Support\Facades\Route;
// import
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;





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

Route::get('/', function () {
    return view('welcome');
});

// ke page show
Route::get('/show-product', [ProductController::class, 'show']);

// ke page create
Route::get('/create-product', [ProductController::class, 'createProduct']);

// tambah data buku
Route::post('/store-product', [ProductController::class, 'storeProduct']);

// ke page edit
Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit');

// biar ke update
Route::patch('/update-product/{id}', [ProductController::class, 'update'])->name('update');

// route untuk delete
Route::delete('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete');

// ke page create category
Route::get('/create-category', [CategoryController::class, 'createCategory']);

// kalo klik submit di form category
Route::post('/store-category', [CategoryController::class, 'storeCategory']);

// view buyer, make sure ke import diatas
Route::get('/view-buyer', [BuyerController::class, 'viewBuyer']);

// view product
// mau nampilin product jdi pake product controller
Route::get('/view-product', [ProductController::class, 'viewProduct']);


// dr laravel breeze

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::get('/cart', function () {
//     return view('cart');
// });

Route::get('/cart', [CartController::class, 'cart']);

Route::get('/product-IpadPro', function () {
    return view('product-IpadPro');
});


Route::post('/checkout', [CheckoutController::class, 'sendConfirmationEmail']);
