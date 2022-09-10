<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->paragraph($nbSentences=2),

            'genre_id' => $this->faker->numberBetween(1,3),
            'user_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
