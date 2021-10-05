<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlaylist extends Model
{
    use HasFactory;

    protected $table = 'userplaylists';

    protected $fillable = ['user_id','name'];
    
    public function songs() {
        return $this->belongsToMany(Song::class, 'song_userplaylist', 'userplaylist_id', 'song_id');
    }

    public function calculateDuration($songs){
        $totalDuration = 0;
        foreach($songs as $song){
            $totalDuration = $totalDuration + $song->duration;
        }
        return $totalDuration;
    }



}
