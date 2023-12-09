<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [indexController::class, "index"])->name("homepage");

Route::get('/mainmenu', [mainController::class, "index"])->name("mainmenu");

Route::get('/datatable', [mainController::class, "datatable"])->name('datatable');
Route::get('/chart', [mainController::class, "chart"])->name('chart');
Route::get('/logging', [mainController::class, "logging"])->name('logging');
Route::get('/about', [mainController::class, "about"])->name('about');
Route::get('/setting', [mainController::class, "setting"])->name('setting');