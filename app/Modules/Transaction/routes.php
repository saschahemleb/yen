<?php

use Illuminate\Support\Facades\Route;
use Yen\Modules\Transaction\Http\Controllers\ListController;

Route::prefix('transaction')->name('transaction::')->group(function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('', [ListController::class, 'show'])->name('list');
    });
});
