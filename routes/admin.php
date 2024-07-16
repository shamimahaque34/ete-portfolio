<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->
    // Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');



group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
});




?>

