<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routeController;

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

Route::controller(routeController::class)->group(function () {
    Route::get('/', 'index')->name('rindex');
    Route::get('/about', 'about')->name('rabout');
    Route::get('/contacts', 'contacts')->name('rcontacts');
});