<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HowtouseController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/index-template', function (){
    return view('new-index');
})->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/registration', [LoginController::class, 'registration'])->name('registration');

Route::resource('about', AboutController::class);

Route::resource('howtouse', HowtouseController::class);

Route::resource('data', DataController::class);