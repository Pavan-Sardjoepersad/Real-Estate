<?php

use App\Http\Controllers\MonthlyExpensesCalculatorController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PropertyController::class, 'show']);


Route::get('/properties', [PropertyController::class, 'index']);

Route::get('/properties/filter', [PropertyController::class, 'filterProperties'])->name('properties.filter');

Route::get('/properties/{id}', [PropertyController::class, 'singleProperty'])->name('property.single');

Route::get('/properties/{id}/calculator', function () {
    return view('property.calculator');
})->name('property.calculator');