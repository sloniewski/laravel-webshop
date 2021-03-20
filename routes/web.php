<?php

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
    return view('welcome');
});


Route::namespace('\App\Http\Controllers\Site')
    ->name('site.')
    ->group(function () {

        Route::resource('product', 'ProductController')->only(['index', 'show']);

    });


// Site routes for administration section
Route::namespace('Admin')
    ->prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

    });
