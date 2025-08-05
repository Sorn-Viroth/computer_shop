<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController as ControllersCheckoutController;
use App\Http\Controllers\frontend\AccessoriesController;
use App\Http\Controllers\frontend\AllProductController;
use App\Http\Controllers\frontend\CamerasController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LaptopsController;
use App\Http\Controllers\frontend\MonitorController;
use App\Http\Controllers\frontend\SmartphoneController;
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

// Route::controller(HomeController::class)->group(function () {
//     Route::get('/', 'index');
// });
Route::get('/', function () {
    return view('index');
})->name('home');
Route::controller(AllProductController::class)->group(function () {
    Route::get('/allProduct', 'index');
});

// Route::controller(CheckoutController::class)->group(function () {
//     Route::get('/checkout', 'index');
// });

Route::controller(LaptopsController::class)->group(function () {
    Route::get('/laptops', 'index');
});

Route::controller(SmartphoneController::class)->group(function () {
    Route::get('/smartphone', 'index');
});

Route::controller(AccessoriesController::class)->group(function () {
    Route::get('/accessories', 'index');
});

Route::controller(MonitorController::class)->group(function () {
    Route::get('/monitor', 'index');
});
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
// routes/web.php
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

// routes/web.php
Route::get('/checkout', [ControllersCheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout', [ControllersCheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/success', [ControllersCheckoutController::class, 'success'])->name('checkout.success');