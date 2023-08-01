<?php

use App\Http\Controllers\FruitController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [FruitController::class, 'index']);
Route::get('fruits/create', [FruitController::class, 'create']);
Route::post('fruits/store', [FruitController::class, 'store']);
Route::get('fruits/edit/{id}', [FruitController::class, 'edit']);
Route::put('fruits/update/{id}',[FruitController::class, 'update']);
Route::get('fruits/delete/{id}', [FruitController::class, 'destroy']);