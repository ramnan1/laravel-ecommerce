<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Product\Index;
use App\Livewire\Shop\Cart;
use App\Livewire\Shop\Checkout;
use App\Livewire\Shop\Index as ShopIndex;
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

Route::get('/', function () {


    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/products', Index::class)->name('products.index');
    Route::get('/shop', ShopIndex::class)->name('shop.index');
    Route::get('/shop/cart', Cart::class)->name('shop.cart');
    Route::get('/shop/checkout', Checkout::class)->name('shop.checkout');
  });
  

require __DIR__.'/auth.php';
