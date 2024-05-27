<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginRegisterController;


Route::middleware('auth:api')->group(function () {
    Route::post('/addcart', [CartController::class, 'store']);
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/menus', [MenuController::class, 'index']);
    Route::get('/restaurants', [RestaurantController::class, 'index']);
});

// Public routes of authtication
Route::controller(LoginRegisterController::class)->group(function() {
    Route::post('/register', 'register');
    Route::post('/login', 'login')->name('login');
});

// Route::middleware('auth:api')->controller(ProductController::class)->group(function() {
//     Route::get('/products', 'index');
//     Route::get('/products/{id}', 'show');
//     Route::get('/products/search/{name}', 'search');
//     Route::post('/add_product', 'store');
// });

