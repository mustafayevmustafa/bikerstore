<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BikerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\Front\AnnouncementController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarkaController;
use App\Http\Controllers\PatternController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
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
    Route::resource('marka', MarkaController::class);
    Route::resource('pattern', PatternController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('color', ColorController::class);
    Route::resource('fuel', FuelController::class);
    Route::resource('about', AboutController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('vehicle', VehicleController::class);
    Route::resource('setting', SettingController::class);
    });
});


########################  FRONT  #####################################

Route::get('/', [HomepageController::class, 'index'])->name('front.index');
//Route::post('/biker/post', [AnnouncementController::class, 'save'])->name('announcement.post');
//Route::get('/biker/listing', [HomepageController::class, 'listing'])->name('front.listing');
Route::group(["prefix" => "biker"],function(){
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
//    Route::get('/', [HomeController::class, 'ad'])->name('admin.home');
    Route::resource('announcement', \App\Http\Controllers\Front\BikerController::class);
});

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
