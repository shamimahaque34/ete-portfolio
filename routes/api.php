<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testimonial-info',[ApiController::class,'getTestimonialInfo']);
Route::get('/service-info',[ApiController::class,'getServiceInfo']);
Route::get('/portfolio-info',[ApiController::class,'getPortfolioInfo']);
Route::get('/all-published-category',[APIController::class,'getAllPublishedCategory']);



