<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HowtouseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjelasanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'postLogin'])->name('proseslogin');

Route::post('/logout', [LoginController::class, 'logout'])->name('proseslogout');

Route::get('/registration', [LoginController::class, 'registration'])->name('registration');

Route::post('/registration', [LoginController::class, 'postregistration'])->name('postregistration');

Route::middleware(['IsAuth'])->group(function () {
    Route::resource('/', IndexController::class);
    
    Route::resource('konsultasi', KonsultasiController::class);

    Route::resource('penjelasan', PenjelasanController::class);

    Route::resource('data', DataController::class);

    Route::resource('howtouse', HowtouseController::class);

    Route::resource('about', AboutController::class);
    
    Route::resource('profile', ProfileController::class);
});