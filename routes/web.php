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

Route::any('/', function () {
    return view('welcome');
});

Route::get('/genre/{genreId}', [App\Http\Controllers\SongController::class, 'filterOnGenre'])->name('song');

Route::get('/playlist/{songId}', [App\Http\Controllers\PlaylistController::class, 'addSongToPlaylist'])->name('playlist');

Route::get('/playlist', function () 
{ 
    return view('/playlist'); 
})->name('playlist');

// Route::get('/playlist', [App\Http\Controllers\PlaylistController::class, 'show'])->name('playlist');

Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index'])->name('genre');

Route::get('/song', [App\Http\Controllers\SongController::class, 'index'])->name('song');

Route::get('/login', function () 
{ 
    return view('/login'); 
})->name('login');

Route::get('/register', function () 
{ 
    return view('/register'); 
})->name('register');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
