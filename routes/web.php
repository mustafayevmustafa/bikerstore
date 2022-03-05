<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Front\HomepageController;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Auth::routes();
//Route::redirect('/','admin');
Route::group(["prefix" => "admin"],function(){
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    
    Route::resource('city', CityController::class);
    Route::resource('about', AboutController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('vehicle', VehicleController::class);
});

Route::get('/admin/login', [AuthController::class, 'index'])->name('admin_login')->middleware('admin');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin_login.post')->middleware('admin');


Route::get('/biker/store', [HomepageController::class, 'index'])->name('front.index');
Route::get('/biker/ad', [HomepageController::class, 'ad'])->name('front.ad');
Route::get('/biker/listing', [HomepageController::class, 'listing'])->name('front.listing');


Route::get('/biker/login', [HomepageController::class, 'login'])->name('front.login');
Route::get('/biker/register', [HomepageController::class, 'register'])->name('front.register');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
