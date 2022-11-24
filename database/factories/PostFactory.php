<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 0, $max = 10),
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true), 
            'description' => $this->faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'image' => 'https://via.placeholder.com/400x400.png?text=No%20Image',
        ];
    }
}
