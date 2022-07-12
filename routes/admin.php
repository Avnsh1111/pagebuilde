<?php

use Illuminate\Support\Facades\Route;


Route::group(['as' => 'admin.'], function () {

    Route::get('/', [\App\Http\Controllers\Admin\AuthController::class,'login'])->name('login');
    Route::post('/check-login', [\App\Http\Controllers\Admin\AuthController::class,'checkLogin'])->name('checkLogin');

    Route::group(['middleware'=>'admin.auth'], function() {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout',[\App\Http\Controllers\Admin\AuthController::class,'logout'])->name('logout');

        Route::get('/pages', [\App\Http\Controllers\Admin\PagesController::class, 'index'])->name('pages');
        Route::get('/pages/add-new', [\App\Http\Controllers\Admin\PagesController::class, 'add'])->name('pages.new');
        Route::post('/pages/add-new', [\App\Http\Controllers\Admin\PagesController::class, 'savePage'])->name('pages.savePage');
        Route::get('/pages/edit/{id}', [\App\Http\Controllers\Admin\PagesController::class, 'editPage'])->name('pages.edit');
        Route::post('/pages/edit/{id}', [\App\Http\Controllers\Admin\PagesController::class, 'update'])->name('pages.update');
        Route::get('/pages/delete/{id}', [\App\Http\Controllers\Admin\PagesController::class, 'delete'])->name('pages.delete');

        Route::get('/page-views', [\App\Http\Controllers\Admin\PagesController::class, 'pageView'])->name('pageViews');

        Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');

    });

});
