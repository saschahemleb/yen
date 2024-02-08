<?php

use Illuminate\Support\Facades\Route;
use Yen\Modules\Budget\Http\Controllers\ListController;

Route::prefix('budget')->name('budget::')->group(function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('', [ListController::class, 'show'])->name('list');
    });
});
