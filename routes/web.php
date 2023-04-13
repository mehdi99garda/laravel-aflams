<?php

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

/*Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/show', function () {
    return view('show');
})->name('show');*/

Route::get('/', function () {
    return redirect('movie');
})->name('/');

Route::resource('/movie', 'App\Http\Controllers\MovieController')->only(['index', 'show']);
