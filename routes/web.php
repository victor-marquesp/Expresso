<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoffeeController;

Route::view('/', 'style-guide')->name('home');

Route::resource('/coffees', CoffeeController::class);
