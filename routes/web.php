<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProblemReportController;
use App\Http\Controllers\SocialAuthController;

// Home Route
Route::get('/', [AuthController::class, 'home'])->name('home');


// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    Route::get('/check', function () {return view('auth.passwords.check');})->name('check');

});
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Cart Routes
Route::middleware('auth')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
    Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
});

// Wishlist Routes
Route::middleware('auth')->group(function () {
    Route::post('/wishlist/add', [WishlistController::class, 'store'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'destroy'])->name('wishlist.remove');
    Route::post('/wishlist/toggle/{productId}', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
});

// Contact Routes and help page
Route::get('/help', [ContactController::class, 'index'])->name('help');
Route::post('/help/send', [ContactController::class, 'store'])->name('contact.send');

// Review Routes
Route::middleware('auth')->group(function () {
    Route::post('/reviews', [ProductReviewController::class, 'store'])->name('reviews.store');
    Route::get('/reviews/{productId}', [ProductReviewController::class, 'show'])->name('reviews.show');
});

// Coupon Routes
Route::post('/apply-coupon', [CouponController::class, 'apply'])->name('apply.coupon');

// Settings Routes
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting/edit', [SettingController::class, 'updatePassword'])->name('setting.updatePassword');
    Route::post('/setting', [SettingController::class, 'update'])->name('profile.update');
    Route::post('/setting/update-image', [SettingController::class, 'updateImage'])->name('profile.updateImage');
    Route::delete('/setting/deleteImage', [SettingController::class, 'deleteImage'])->name('profile.deleteImage');

// Problem Report Routes
Route::post('/report-problem', [ProblemReportController::class, 'store'])->name('report.problem.store');

// Social Authentication Routes
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
Route::get('auth/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);
Route::get('/auth/twitter', [SocialAuthController::class, 'redirectToTwitter']);
Route::get('/auth/twitter/callback', [SocialAuthController::class, 'handleTwitterCallback']);



