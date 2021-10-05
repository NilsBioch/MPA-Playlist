<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserPlaylist;

use App\Models\Playlist;

use DB;

use Session;

use Auth;

class UserPlaylistController extends Controller
{
    private $songs = array(); 

    public function index(){
        $userPlaylists = userPlaylist::where('user_id', Auth::user()->id)->get();
        foreach($userPlaylists as $userPlaylist){
            $userPlaylist->duration=$this->calculateDuration($userPlaylist->id);
        }
        return view('userPlaylist', ['userPlaylists' => $userPlaylists]);
    }

    public function saveSongInUserPlaylist($playlist_id, $song_id){
        $userPlaylist = UserPlaylist::find($playlist_id);
        $userPlaylist->songs()->attach($song_id);
        return redirect()->route('userPlaylist');
    }

    public function savePlaylist(Request $request){
        $request->all();  
        $userPlaylist = new Playlist();
        $songs = $userPlaylist->getSongIds();
        $playlist = UserPlaylist::create([
            'user_id' => Auth::user()->id,
            'name' => $request->playlistName,
        ]);
        foreach($songs as $song){
            $playlist->songs()->attach($song);
        }
        return redirect()->route('userPlaylist');
    }

    public function editPlaylist(Request $request){
        $request->all();  
        $userPlaylist = new Playlist();
        $playlist = UserPlaylist::find($request->playlistId);
        $playlist->name = $request->playlistName;
        $playlist->save();
        return redirect()->route('userPlaylist');
    }
    
    public function deleteUserPlaylist($userPlaylist_id){
        $userPlaylist = UserPlaylist::find($userPlaylist_id);
        $songs = $userPlaylist->songs()->get();
        foreach($songs as $song){
            $userPlaylist->songs()->detach($song->id);
        }
        $userPlaylist->delete();
        return redirect()->route('userPlaylist');
    }

    public function deleteSong($userPlaylist_id, $song_id){
        $userPlaylist = UserPlaylist::find($userPlaylist_id);
        $userPlaylist->songs()->detach($song_id);
        return redirect()->route('userPlaylist');
    }

    public function calculateDuration($userPlaylist_id){
        $userPlaylist = UserPlaylist::find($userPlaylist_id);
        $songs = $userPlaylist->songs()->get();
        $totalDuration = 0;
        foreach($songs as $song){
            $totalDuration = $totalDuration + $song->duration;
        }
        return $totalDuration;
    }

}


