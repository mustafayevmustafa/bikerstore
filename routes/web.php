<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Front\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::redirect('/','admin');
Route::group(["prefix" => "admin"],function(){
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('city', CityController::class);
    Route::resource('about', AboutController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('vehicle', VehicleController::class);
});

Route::get('/biker/store', [HomepageController::class, 'index'])->name('front.index');
Route::get('/biker/ad', [HomepageController::class, 'ad'])->name('front.ad');
Route::get('/biker/listing', [HomepageController::class, 'listing'])->name('front.listing');
Route::get('/biker/login', [HomepageController::class, 'login'])->name('front.login');
Route::get('/biker/register', [HomepageController::class, 'register'])->name('front.register');





