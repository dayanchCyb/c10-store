<?php

use App\Http\Controllers\CarController;
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

Route::controller(CarController::class)->group(function () {
    Route::get('', 'index')->name('home');
    Route::get('/cars/{id}', 'show')->name('cars.show')->where('id', '[0-9]+');
});

