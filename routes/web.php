<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;


Route::controller(ApiController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});