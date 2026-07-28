<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoffeeController;

Route::get('/', function () {
    return redirect()->route('coffee.index');
})->name('home');

Route::resource('/coffee', CoffeeController::class);
