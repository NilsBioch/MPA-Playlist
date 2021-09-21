<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use Session;

class Playlist extends Model
{
    use HasFactory;
    
    private $songsInPlaylist = array();     // [56,89,9]

    //check session if key playlist excists
    //yes retrieve contens no create playlist array in session
    public function __construct(){
        if(Session::has('playlist'))
        {
           $this->songsInPlaylist =  Session::pull('playlist');
        }else{
            Session::put('playlist', []);
        }
    } 

    // add to $this->songs..
    // push $this->songs... to
    public function addSongToPlaylist($songId) {
        array_push($this->songsInPlaylist, $songId);
        $this->songsInPlaylist = array_unique($this->songsInPlaylist);
        Session::put('playlist',  $this->songsInPlaylist);
    }

    public function getSongIds() {
        Session::put('playlist',  $this->songsInPlaylist);
        return $this->songsInPlaylist;
    }

    public function removeSongFromPlaylist($songId) {
        if (($key = array_search($songId, $this->songsInPlaylist)) !== false) {
            unset($this->songsInPlaylist[$key]);
        }
        Session::put('playlist',  $this->songsInPlaylist);
    }
}

