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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Auth::routes();

/* FRONTEND */

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/zelazka', [HomeController::class, 'index'])->name('front.home.irons');
Route::get('/kontakt', [HomeController::class, 'index'])->name('front.home.contact');
Route::get('/produkty', [HomeController::class, 'index'])->name('front.home.products');
Route::get('/wybierz-gladko', [HomeController::class, 'index'])->name('front.home.quiz');
Route::get('/satysfakcja-gwarantowana', [HomeController::class, 'index'])->name('front.home.satisfaction');
Route::get('/power-steam-ultra', [ProductController::class, 'powerSteamUltra'])->name('front.product.psu');
Route::get('/one-temperature', [ProductController::class, 'oneTemperature'])->name('front.product.ot');
Route::get('/impact', [ProductController::class, 'impact'])->name('front.product.i');
Route::get('/pearl-glide-rose', [ProductController::class, 'pearlGlideRose'])->name('front.product.pgr');
Route::get('/steam-genie', [ProductController::class, 'steamGenie'])->name('front.product.sg');
Route::get('/cordless-one-temperature', [ProductController::class, 'cordlessOneTemperature'])->name('front.product.cot');
Route::get('/copper-express', [ProductController::class, 'copperExpress'])->name('front.product.cx');

