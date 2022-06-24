<?php

use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/chart/department', [IndexController::class, 'getDepartmentChart'])->name('api.chart.department');

Route::get('/chart/month', [IndexController::class, 'getMonthChart'])->name('api.chart.month');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

