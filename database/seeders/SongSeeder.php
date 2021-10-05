<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'id' => 1,
            'name' => 'Thunderstruck',
            'artist_band' => 'AC/DC',
            'genreId' => '1',
            'duration' => '146'
        ]);
        DB::table('songs')->insert([
            'id' => 2,
            'name' => 'Smells like teen spirit',
            'artist_band' => 'Nirvana',
            'genreId' => '1',
            'duration' => '254'
        ]);
        DB::table('songs')->insert([
            'id' => 3,
            'name' => 'Flesh and Bone',
            'artist_band' => 'Black Math',
            'genreId' => '2',
            'duration' => '213'
        ]);
        DB::table('songs')->insert([
            'id' => 4,
            'name' => 'Strangelove',
            'artist_band' => 'Black Math',
            'genreId' => '2',
            'duration' => '423'
        ]);
        DB::table('songs')->insert([
            'id' => 5,
            'name' => 'Master of Puppets  ',
            'artist_band' => 'Metallica',
            'genreId' => '3',
            'duration' => '125'
        ]);
        DB::table('songs')->insert([
            'id' => 6,
            'name' => 'Paranoid',
            'artist_band' => 'Black Sabbath',
            'genreId' => '3',
            'duration' => '180'
        ]);
    }
}
