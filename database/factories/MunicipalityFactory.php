<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class MunicipalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(),
            'municipality_name' => $this->faker->city,
            // 'timestamp' => $this->faker->dateTime(),
            // Add other fields as needed
        ];  
    }

}
