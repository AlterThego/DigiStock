<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'animal_id' => $this->faker->unique()->randomNumber(),
            'animal_name' => $this->faker->word,
            'category' => $this->faker->word
        ];
    }
}
