<?php

namespace Database\Factories;

use App\Models\Population;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Municipality;

class PopulationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Population::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get all municipality IDs
        $municipalityIds = Municipality::pluck('municipality_id')->toArray();

        return [
            'id' => $this->faker->unique()->randomNumber(),
            'year' => $this->faker->numberBetween(2017, 2022),
            'count' => $this->faker->randomNumber(),
            'municipality_id' => $this->faker->randomElement($municipalityIds),
        ];
    }
}
