<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Flesh and Bone',
            'artist_band' => 'Black Math',
            'duration' => '00:03:00'
        ]);
    }
}
