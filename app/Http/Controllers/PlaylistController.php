<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Playlist;

use App\Models\Song;

use Session;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlist = new Playlist(); 
        $songs = Song::findMany($playlist->getSongIds());
        return view('playlist', ['songs' => $songs]);
    }

    public function userPlaylistIndex()
    {
        // $playlist = new Playlist(); 
        // $songs = Song::findMany($playlist->getSongIds());
        // return view('playlist', ['songs' => $songs]);
        return view('userPlaylist');
    }
    
    public function savePlaylist(Request $request)
    {
        dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        $playlistName = $request->playlistName; 
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
