<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExampleController::class,'index'])->middleware('example');
Route::get('/no-access', [ExampleController::class,'noAccess'])->name('no-access');
Route::post('/create',[AuthController::class,'createUser']);
Route::post('/login',[AuthController::class,'loginUser']);



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
