<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Album::factory(10)->create();
        \App\Models\Card::factory(10)->create([
            'album_id' => 1
        ]);
    }
}
