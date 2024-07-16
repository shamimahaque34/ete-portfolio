<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');



?>
