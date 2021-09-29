<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Playlist;

use App\Models\Song;

use DB;

use Session;


class PlaylistController extends Controller
{
    public function index()
    {
        $playlist = new Playlist(); 
        $songs = Song::findMany($playlist->getSongIds());
        return view('playlist', ['songs' => $songs]);
    }

    public function addSongToPlaylist($songId)
    {
        $playlist = new Playlist(); // constructor
        $playlist->addSongToPlaylist($songId);
        $songs = Song::findMany($playlist->getSongIds());
        return view('playlist', ['songs' => $songs]);
    }

    public function removeSongFromPlaylist($songId){
        $playlist = new Playlist(); // constructor
        $playlist->removeSongFromPlaylist($songId);
        $songs = Song::findMany($playlist->getSongIds());
        return view('playlist', ['songs' => $songs]);
    }
}
