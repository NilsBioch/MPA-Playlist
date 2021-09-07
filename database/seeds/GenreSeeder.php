<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'id' => 1,
            'name' => 'Rock'
        ]);
        DB::table('genres')->insert([
            'id' => 2,
            'name' => 'Pop'
        ]);
        DB::table('genres')->insert([
            'id' => 3,
            'name' => 'Metal'
        ]);
    }
}
