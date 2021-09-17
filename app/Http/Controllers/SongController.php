<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Song;

class SongController extends Controller
{
    //
    public function index(){
        $songs = Song::all();
        return view('song', ['songs' => $songs]);
    }

    public function filterOnGenre($genreId){
        $songs = Song::where('genreId', $genreId)->get();
        return view('song', ['songs' => $songs]);
    }
}
