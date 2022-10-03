<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommerceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
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


//Get Mehtods
Route::get('/', [CommerceController::class, 'index'])->name('index');
Route::get('/single_product/{id}', [CommerceController::class, 'single_product'])->name('single_product');
Route::get('/single_product', function () {
    return redirect('/');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', [CommerceController::class, 'products'])->name('products');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

//Post methods
Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function () {
    return redirect('/');
});

Route::post('/remove_prodcut', [CartController::class, 'remove'])->name('remove');
Route::get('/remove_product', function () {
    return redirect('/');
});

Route::post('/edit_quantity', [CartController::class, 'edit_quantity'])->name('edit_quantity');
Route::get('/edit_quantity', function () {
    return redirect('/');
});

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::post('/place_order', [CartController::class, 'place_order'])->name('place_order');
Route::get('/place_order', function () {
    return redirect('/');
});

Route::get('/payment' ,[PaymentController::class, 'payment'])->name('payment');
Route::get('/verify_payment/{transaction_id}' , [PaymentController::class,'verify_payment'])->name('verify_payment');
Route::get('/complete_payment', [PaymentController::class,'complete_payment'])->name('complete_payment');
Route::get('/thank_you', [PaymentController::class, 'thank_you'])->name('thank_you');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
