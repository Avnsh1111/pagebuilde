<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['as' => 'front.'], function () {
    Route::get('/', [\App\Http\Controllers\Front\HomeController::class,'index'])->name('home')->middleware('pageview');

    //Login page
    Route::get('/login', [\App\Http\Controllers\Front\AuthController::class,'index'])->name('login');
    Route::get('/login/otp', [\App\Http\Controllers\Front\AuthController::class,'loginOtp'])->name('login.otp');
    Route::post('/login/check', [\App\Http\Controllers\Front\AuthController::class,'loginCheck'])->name('login.check');

    Route::post('/login/send-otp', [\App\Http\Controllers\Front\AuthController::class,'sendOtp'])->name('login.sendOtp');
    Route::post('/login/check/otp', [\App\Http\Controllers\Front\AuthController::class,'checkOtp'])->name('login.checkOtp');

    //Login With Google
    Route::get('/auth/google', [\App\Http\Controllers\Front\AuthController::class,'loginWithGoogle'])->name('login.google');
    Route::get('/callback', [\App\Http\Controllers\Front\AuthController::class,'callbackGoogle'])->name('login.googleCallback');

    //Logout
    Route::get('/logout', [\App\Http\Controllers\Front\AuthController::class,'logout'])->name('logout');

    //Signup
    Route::get('/sign-up', [\App\Http\Controllers\Front\AuthController::class,'signup'])->name('signup');

    Route::post('/sign-up/submit', [\App\Http\Controllers\Front\AuthController::class,'signupSubmit'])->name('signup.submit');

    Route::get('/verify-email/{hash}', [\App\Http\Controllers\Front\AuthController::class,'verifyEmail'])->name('signup.verifyEmail');

    Route::get('/{slug}', [\App\Http\Controllers\Front\HomeController::class,'page'])->middleware('pageview');


});


