<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoffeeController;

Route::get('/', function () {
    return redirect()->route('coffee.index');
});

Route::resource('/coffee', CoffeeController::class);
