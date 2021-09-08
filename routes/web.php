<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\GenreController;

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

Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index'])->name('genre');

Route::get('/song', [App\Http\Controllers\SongController::class, 'index'])->name('song');

Route::get('/genre/{genreid}', [App\Http\Controllers\SongController::class, 'filterOnGenre'])->name('song');

