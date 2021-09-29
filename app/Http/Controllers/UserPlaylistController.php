<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserPlaylist;

use DB;

use Session;

use Auth;

class UserPlaylistController extends Controller
{
    private $songs = array(); 

    public function index()
    {
        $userPlaylists = userPlaylist::where('user_id', Auth::user()->id)->get();
        // $playlist = new Playlist(); 
        // $songs = Song::findMany($playlist->getSongIds());
        // return view('playlist', ['songs' => $songs]);
        //dd(UserPlaylist::find(1)->songs());

        return view('userPlaylist', ['userPlaylists' => $userPlaylists]);
    }

    public function savePlaylist(Request $request)
    {
        $request->all();  

        $this->songs =  Session::pull('playlist');
        
        $playlist = UserPlaylist::create([
            'user_id' => Auth::user()->id,
            'name' => $request->playlistName,
        ]);

        foreach($this->songs as $song){
            DB::table('song_userplaylist')->insert([
                'userplaylist_id' => $playlist->id,
                'song_id' => $song,
            ]);
        }


        
        // $userPlaylists = userPlaylist::where('user_id', Auth::user()->id)->get();

        // return view('userPlaylist', ['userPlaylists' => $userPlaylists]);
    }


}
