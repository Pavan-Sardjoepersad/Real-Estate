<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PropertyController::class, 'show']);


Route::get('/properties', [PropertyController::class, 'index']);

Route::get('/properties/filter', [PropertyController::class, 'filterProperties'])->name('properties.filter');