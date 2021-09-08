<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;

class SongController extends Controller
{
    public function index(){
        $songs = Song::all();
        return view('Song', ['songs' => $songs]);
    }

    public function filterOnGenre($genreId){
        $songs = Song::where('genreId', $genreId)->get();
        return view('Song', ['songs' => $songs]);
    }
}
