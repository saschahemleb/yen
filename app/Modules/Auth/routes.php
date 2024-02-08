<?php

use Illuminate\Support\Facades\Route;
use Yen\Modules\Auth\Http\Controllers\LoginController;
use Yen\Modules\Auth\Http\Controllers\LogoutController;
use Yen\Modules\Auth\Http\Controllers\RegisterController;

Route::prefix('auth')->name('auth::')->group(function () {
    Route::middleware(['web', 'guest'])->group(function () {
        Route::get('register', [RegisterController::class, 'create'])->name('register');
        Route::post('register', [RegisterController::class, 'store']);

        Route::get('login', [LoginController::class, 'create'])->name('login');
        Route::post('login', [LoginController::class, 'store']);
    });

    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('logout', [LogoutController::class, 'destroy'])->name('logout');
    });
});
