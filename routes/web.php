<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Models\Reservation;
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



Route::group([], function () {
    Route::controller(PagesController::class)->group(function () {


        // partie authontifcation
        Route::get('/login', 'login');
        Route::get('/register', 'register');

        // Partie Pages
        Route::get('/', 'index');
        Route::get('/shop', 'shop');
        Route::get('/contact', 'contact');
        Route::get('/services', 'services');
        Route::get('/about', 'about');
        Route::get('/cart', 'cart');
        Route::get('checkoutpage', 'checkout');
    
    });
});


Route::group([] , function(){
    Route::controller(UserController::class)->group(function(){
        Route::post('/register', 'register');
        Route::post('/login', 'login');
        Route::get('/logout', 'logout');


    });
});


Route::get('/remove/product/{id}' , [ReservationController::class , 'delete']);
