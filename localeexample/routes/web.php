<?php

use App\Http\Controllers\LanguajeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
Route::get('/lang/{lang}',[LanguajeController::class,'switchLang'])->name('lang');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/example',[WelcomeController::class,'index','msg'])->name('example');
