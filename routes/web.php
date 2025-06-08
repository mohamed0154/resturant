<?php

use App\Http\Controllers\Auth\AuthUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Carts\CartController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Dishes\DishesController;
use App\Http\Controllers\Dishes\SearchController;
use App\Http\Controllers\Orders\OrderController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return to_route('welcome');
});

Route::group(['prefix' => LaravelLocalization::setLocale() . '/users',
        'middleware' => ['guest:web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    // Welcome Page
    Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');

    // Authentication
    Route::controller(AuthUserController::class)->group(function () {
        Route::get('/login_view', 'login_view')->name('login');
        Route::get('/register_view', 'register_view')->name('register_view');

        Route::post('/login', 'login')->name('users.login')->middleware('throttle:login');
        Route::post('/register', 'register')->name('register')->middleware('throttle:login');
    });
});

// Pages for user
Route::group(['prefix' => LaravelLocalization::setLocale() . '/users', 'as' => 'users.', 'middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    // categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

    // Dishes
    Route::get('/dishes', [DishesController::class, 'index'])->name('dishes');
    Route::get('/dishes/search', [SearchController::class, 'search'])->name('dishes.search');

    // Cart
    Route::get('/carts/index', [CartController::class, 'index'])->name('carts.index');
    Route::get('/carts/store/{dish}', [CartController::class, 'store'])->name('carts.store')->middleware('throttle:order');
    Route::get('/carts/decrease/{cart}', [CartController::class, 'decrease'])->name('carts.decrease');
    Route::get('/carts/increase/{cart}', [CartController::class, 'increase'])->name('carts.increase');
    Route::get('/carts/destroy/{cart}', [CartController::class, 'destroy'])->name('carts.destroy');

    // Payment
    Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');

    // order
    Route::get('/orders/show', [OrderController::class, 'user_orders'])->name('orders.show');
    Route::get('/orders/store', [OrderController::class, 'store'])->name('orders.store');

    // contact
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');

    // Logout
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});
