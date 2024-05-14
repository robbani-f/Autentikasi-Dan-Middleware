<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Routes for Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Routes for Admin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

// Routes for Merchant
Route::middleware(['auth', 'role:superadmin|merchant'])->group(function () {
    Route::get('/merchant', [MerchantController::class, 'index'])->name('merchant.index');
    Route::get('/merchant/products/{product}/edit', [MerchantController::class, 'edit'])->name('merchant.products.edit');
    Route::put('/merchant/products/{product}', [MerchantController::class, 'update'])->name('merchant.products.update');
});

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User Management Route
Route::middleware('auth')->group(function () {
    Route::get('/user_management', [UserController::class, 'index'])->name('user_management');
});

?>
