<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use Session;

class Playlist extends Model
{
    use HasFactory;
    private $songsInPlaylist;     // [56,89,9]

    public function __construct(){
        //check session if key playlist excists
        //yes retrieve contens no create playlist array in session
        if(Session::has('playlist'))
        {
            $songsInPlaylist = $request->session()->pull('playlist');
        }else{
            $request->session()->put('playlist');
        }
    }

    public function addSongToPlaylist($songId) {
        // add to $this->songs..
        // push $this->songs... to
        array_push($songsInPlaylist, $songId);
        $request->session()->push('playlist', $songsInPlaylist);
    }
}

