<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\InfoMiddleware;

Route::get('/',[InfoController::class,'index'])->name('index')->middleware(InfoMiddleware::class);
Route::get('/create',[InfoController::class,'create'])->name('create');
Route::post('/store',[InfoController::class,'store'])->name('store')->middleware(InfoMiddleware::class);
