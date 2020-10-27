<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\centroController;
use App\Http\Controllers\homeController;
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


Route::get('/', [homeController::class, 'home']);
Route::get('centro', [centroController::class, 'index']);

Route::get('centro/zara', [centroController::class, 'zara']);
Route::get('centro/pyb', [centroController::class, 'pyb']);
Route::get('centro/macdonals', [centroController::class, 'macdonals']);
Route::get('centro/nike', [centroController::class, 'nike']);
Route::get('centro/adidas', [centroController::class, 'adidas']);