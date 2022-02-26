<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::redirect('/','admin');
Route::group(["prefix" => "admin"],function(){
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('city', CityController::class);
});



