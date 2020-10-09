<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel\ReviewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThxController;
use App\Http\Controllers\WarrantyController;

Auth::routes();

/* FRONTEND */

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/zelazka', [HomeController::class, 'index'])->name('front.home.irons');
Route::get('/kontakt', [HomeController::class, 'index'])->name('front.home.contact');
Route::post('/kontakt/wyslij', [ContactController::class, 'send'])->name('front.contact.send');
Route::get('/power-steam-ultra', [ProductController::class, 'powerSteamUltra'])->name('front.product.psu');
Route::get('/one-temperature', [ProductController::class, 'oneTemperature'])->name('front.product.ot');
Route::get('/impact', [ProductController::class, 'impact'])->name('front.product.i');
Route::get('/pearl-glide-rose', [ProductController::class, 'pearlGlideRose'])->name('front.product.pgr');
Route::get('/steam-genie', [ProductController::class, 'steamGenie'])->name('front.product.sg');
Route::get('/cordless-one-temperature', [ProductController::class, 'cordlessOneTemperature'])->name('front.product.cot');
Route::get('/copper-express', [ProductController::class, 'copperExpress'])->name('front.product.cx');
Route::get('/quiet-super-steam', [ProductController::class, 'quietSuperSteam'])->name('front.product.qss');
Route::get('/colour-control-supreme', [ProductController::class, 'colourControlSupreme'])->name('front.product.ccs');
Route::get('/formularz', [ApplicationController::class, 'form'])->name('front.application.form');
Route::post('/formularz/zapisz', [ApplicationController::class, 'store'])->name('front.application.save');
Route::get('/formularz/podziekowania', [ThxController::class, 'form'])->name('front.thx.form');
Route::get('/gwarancja', array(WarrantyController::class, 'index'))->name('front.warranty');

/* BACKEND */

Route::middleware(['auth', 'verified', 'jwt.access'])->group(function () {
    Route::get('/panel', [\App\Http\Controllers\Panel\HomeController::class, 'index'])->name('back.home');

    Route::middleware(['can:isAdmin'])->group(function () {
        Route::get('/panel/zgloszenie', [\App\Http\Controllers\Panel\ApplicationController::class, 'index'])->name('back.application');
        Route::get('/panel/zgloszenie/{application}', [\App\Http\Controllers\Panel\ApplicationController::class, 'show'])->name('back.application.show');

        Route::get('/panel/opinie', [ReviewsController::class, 'index'])->name('back.review');
        Route::get('/panel/opinie/dodaj', [ReviewsController::class, 'create'])->name('back.review.create');
        Route::get('/panel/opinie/zmien/{review}', [ReviewsController::class, 'edit'])->name('back.review.edit');
        Route::get('/panel/opinie/{review}', [ReviewsController::class, 'show'])->name('back.review.show');
    });
});
