<?php

use Illuminate\Support\Facades\Route;

Route::view('/','index')->name('index');
Route::view('/about','about')->name('about');
Route::view('/services/xd','services')->name('services');
Route::view('/contact','contact')->name('contact');
