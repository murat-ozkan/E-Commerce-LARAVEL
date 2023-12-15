<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

//! RouteServiceProvider.php bul ve içinde bazı değişiklikler yap ki panel.php tanımlansın.

Route::group(['middleware' => 'panelsetting', 'prefix' => 'panel'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('panel');
});
