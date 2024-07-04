<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('bus', [HomeController::class, 'bus']);
Route::get('bus/{id}', [HomeController::class, 'bus_detail']);
Route::post('rental', [HomeController::class, 'rental'])->middleware('auth');
