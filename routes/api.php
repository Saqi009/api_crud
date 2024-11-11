<?php

use App\Http\Controllers\api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::controller(ApiController::class)->group(function() {
    Route::get('/api/create', 'create')->name('api.create');
    Route::post('/api/create', 'store');
}); 