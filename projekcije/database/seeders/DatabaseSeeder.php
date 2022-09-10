<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Award;
use App\Models\Film;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::factory(3)->create();
        $this->call([
            GenreSeeder::class,
            FilmSeeder::class,
            AwardSeeder::class
        ]);
    }
}
