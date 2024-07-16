<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SkillCategoryController;
use App\Http\Controllers\Backend\SkillController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->
    // Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');



group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
});


    //homes route
    Route::resource('homes', HomeController::class);

    //homes route
    Route::resource('abouts', AboutController::class);

    //homes route
    Route::resource('services', ServiceController::class);

    //homes route
    Route::resource('portfolios', PortfolioController::class);

    //homes route
    Route::resource('contacts', ContactController::class);

    //homes route
    Route::resource('skill-categories', SkillCategoryController::class);

    //homes route
    Route::resource('skills', SkillController::class);





?>

