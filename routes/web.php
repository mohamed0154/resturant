<?php

use App\Http\Controllers\Dishes\DishesController;
use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Carts\CartController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//Welcome Page
Route::get('/',[WelcomeController::class,'welcome'])->middleware('guest:web');


/////Authentication
Route::group(['middleware'=>'guest:web'],function(){
    Route::controller(AuthUserController::class)->group(function () {

        Route::get('/login_view','login_view')->name('login');
        Route::get('/register_view','register_view')->name('register_view');
        
        Route::post('/login','login')->name('users.login');
        Route::post('/register','register')->name('register');
    });
});


//Pages for user
Route::group(['as'=>'users.','middleware'=>'auth'],function(){
    Route::get('/home',[HomeController::class,'home'])->name('home');


    // categories
    Route::get('/categories',[CategoryController::class,'index'])->name('categories');
   // Dishes
    Route::get('/dishes',[DishesController::class,'index'])->name('dishes');

     // Dishes
    Route::get('/order/create',[OrderController::class,'create'])->name('order.create');

    //Cart
    Route::get('/carts/index',[CartController::class,'index'])->name('carts.index');
    Route::get('/carts/store/{dish}',[CartController::class,'store'])->name('carts.store');
    Route::get('/carts/decrease/{cart}',[CartController::class,'decrease'])->name('carts.decrease');
    Route::get('/carts/increase/{cart}',[CartController::class,'increase'])->name('carts.increase');

    // Logout
    Route::post('/logout',[LogoutController::class,'logout'])->name('logout');
});


