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

Route::get('/playlist/{songId}', [App\Http\Controllers\PlaylistController::class, 'addSongToPlaylist'])->name('playlist.add');

Route::get('/playlist/remove/{songId}', [App\Http\Controllers\PlaylistController::class, 'removeSongFromPlaylist'])->name('playlist.remove');

Route::get('/playlist', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlist');

Route::post('/savePlaylist', [App\Http\Controllers\UserPlaylistController::class, 'savePlaylist']);

Route::post('/editPlaylist', [App\Http\Controllers\UserPlaylistController::class, 'editPlaylist']);

Route::get('/userPlaylist/deleteSong/{userPlaylist_id}/{song_id}', [App\Http\Controllers\UserPlaylistController::class, 'deleteSong'])->name('userPlaylist.deleteSong');

Route::get('/userPlaylist/{playlist_id}/{song_id}', [App\Http\Controllers\UserPlaylistController::class, 'saveSongInUserPlaylist'])->name('userPlaylist.saveSong');

Route::get('/userplaylist/deletePlaylist/{userPlaylist_id}', [App\Http\Controllers\UserPlaylistController::class, 'deleteUserPlaylist'])->name('userPlaylist.deletePlaylist');

Route::get('/userPlaylist', [App\Http\Controllers\UserPlaylistController::class, 'index'])->name('userPlaylist');

Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index'])->name('genre');

Route::get('/song', [App\Http\Controllers\SongController::class, 'index'])->name('song');

Route::get('/login', function () { return view('/login'); })->name('login');

Route::get('/register', function () { return view('/register'); })->name('register');

Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
