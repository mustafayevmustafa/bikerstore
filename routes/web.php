<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::redirect('/','admin');
Route::group(["prefix" => "admin"],function(){
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('city', CityController::class);
    Route::resource('about', AboutController::class);
    Route::resource('service', ServiceController::class);
});



