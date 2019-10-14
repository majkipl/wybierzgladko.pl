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

Route::middleware(['myauth:api'])->group(function () {
    Route::get('/applications', [ApplicationController::class, 'index'])->name('api.application');

    Route::get('/reviews', [ReviewController::class, 'index'])->name('api.review');
    Route::post('/reviews', [ReviewController::class, 'add'])->name('api.review.add');
    Route::put('/reviews', [ReviewController::class, 'update'])->name('api.review.update');
    Route::delete('/reviews/{review}', [ReviewController::class, 'delete'])->name('api.review.delete');
//
//    Route::get('/urls', [UrlController::class, 'index'])->name('api.url');
//    Route::post('/urls', [UrlController::class, 'add'])->name('api.url.add');
//    Route::put('/urls', [UrlController::class, 'update'])->name('api.url.update');
//    Route::delete('/urls/{url}', [UrlController::class, 'delete'])->name('api.url.delete');
});

Route::get('/urls/{id}', [UrlController::class, 'product'])->name('api.urls.product');
