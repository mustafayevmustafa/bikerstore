<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\SocialController;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin'],function(){
    Route::redirect('/','admin/login');
    Route::group(['middleware' => 'isLogin'],function(){
        Route::get('/login', [AuthController::class, 'index'])->name('admin_login');
        Route::post('/login', [AuthController::class, 'login'])->name('admin_login.post');
});
    Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

    Route::group(['middleware'=>'isAdmin'],function(){
        Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    
    Route::resource('city', CityController::class);
    Route::resource('about', AboutController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('vehicle', VehicleController::class);
    });
});


########################  FRONT  #####################################

Route::get('/', [HomepageController::class, 'index'])->name('front.index');
Route::get('/biker/ad', [HomepageController::class, 'ad'])->name('front.ad');
Route::get('/biker/listing', [HomepageController::class, 'listing'])->name('front.listing');


Route::get('/biker/login', [HomepageController::class, 'login'])->name('front.login');
Route::get('/biker/register', [HomepageController::class, 'register'])->name('front.register');
Route::get('/login/facebook',[SocialController::class,'facebookRedirect']);
Route::get('/login/facebook/callback',[SocialController::class,'loginWithFacebook']);

Route::get('/login/google',[SocialController::class,'googleRedirect']);
Route::get('/login/google/callback',[SocialController::class,'loginWithGoogle']);
Route::get('/logout',[HomepageController::class,'logout'])->name('front.logout');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
