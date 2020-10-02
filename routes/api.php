<?php

use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\ReviewController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['api.keys'])->group(function () {
    Route::middleware(['api.auth'])->group(function () {
        Route::get('/applications', [ApplicationController::class, 'index'])->name('api.application');

        Route::get('/reviews', [ReviewController::class, 'index'])->name('api.review');
        Route::post('/reviews', [ReviewController::class, 'add'])->name('api.review.add');
        Route::put('/reviews', [ReviewController::class, 'update'])->name('api.review.update');
        Route::delete('/reviews/{review}', [ReviewController::class, 'delete'])->name('api.review.delete');
    });
});
