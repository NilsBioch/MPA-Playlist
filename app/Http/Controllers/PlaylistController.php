<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Playlist;

use Session;

class PlaylistController extends Controller
{
    public function show(Request $request)
    {
        //$value = $request->session()->get('key');
        //print_r ($request->session()->all());
    }

    public function addSongToPlaylist($songId)
    {
        $playlist = new Playlist(); // constructor
        $playlist->addSongToPlaylist($songId);
    }
}
