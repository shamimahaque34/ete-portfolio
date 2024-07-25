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
use App\Http\Controllers\Backend\SocialIconController;

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

    //abouts route
    Route::resource('abouts', AboutController::class);

    //services route
    Route::resource('servicees', ServiceController::class);

    //portfolios route
    Route::resource('portfolios', PortfolioController::class);

    //contacts route
    Route::resource('contacts', ContactController::class);

    //skill-categories route
    Route::resource('skill-categories', SkillCategoryController::class);

    //skills route
    Route::resource('skills', SkillController::class);

    //social icons route
    Route::resource('social-icons', SocialIconController::class);





?>

