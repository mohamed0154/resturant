<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Dishes\DishesController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Orders\OrderController;
use Illuminate\Support\Facades\Route;



// Authenticated

Route::get('/login_view',[LoginController::class,'login_view'])->middleware('guest:admin')->name('login');
Route::post('/login',[LoginController::class,'login'])->name('auth');




Route::middleware('admin')->group(function(){

    //dashboard
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('admin')->name('dashboard');
    
    // Categories
    Route::resource('categories',CategoryController::class)->except(['index']);


    // Dishes
    Route::resource('dishes',DishesController::class)->except(['index','show','destroy']);
    Route::get('dishes/{dish}', [DishesController::class, 'destroy'])->name('dishes.destroy');

    //orders
    Route::resource('orders',OrderController::class)->except(['create','destroy']);

});
