<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Song;

use App\Models\UserPlaylist;

class SongController extends Controller
{
    //
    public function index(){
        $songs = Song::all();
        $playlists = UserPlaylist::where('user_id', Auth::user()->id)->get();
        return view('song', ['songs' => $songs, 'playlists' => $playlists]);
    }

    public function filterOnGenre($genreId){
        $songs = Song::where('genreId', $genreId)->get();
        $playlists = UserPlaylist::where('user_id', Auth::user()->id)->get();
        return view('song', ['songs' => $songs, 'playlists' => $playlists]);
    }


}
