<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('/login', [HomeController::class, 'loginPage'])->name('login');

Route::get('/register', [HomeController::class, 'registerPage'])->name('register');

Route::get('/wishlist', [HomeController::class, 'wishlistPage'])->name('wishlist');

Route::get('cart', [HomeController::class, 'cartPage'])->name('cart');

Route::get('checkout', [HomeController::class, 'checkoutPage'])->name('checkout');

Route::get('complete-order', [HomeController::class, 'completeOrderPage'])->name('complete-order');

Route::get('view-product', [HomeController::class, 'viewProductPage'])->name('view-product');

Route::get('product-details', [HomeController::class, 'productDescriptionPage'])->name('product-details');

Route::get('account-overview', [HomeController::class, 'accountOverviewPage'])->name('account-overview');

Route::get('cancel', [HomeController::class, 'cancelOrderPage'])->name('cancel');
