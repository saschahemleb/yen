<?php

use Illuminate\Support\Facades\Route;
use Yen\Modules\App\Http\Controllers\DashboardController;

Route::prefix('app')->name('app::')->group(function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('', [DashboardController::class, 'show'])->name('dashboard');
    });
});
