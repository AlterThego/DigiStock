<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Population;
use App\Models\Municipality;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class PopulationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all municipality IDs
        $municipalityIds = DB::table('municipalities')->pluck('id')->toArray();

        // Create a Faker instance
        $faker = FakerFactory::create();

        // Seed the database with population data
        foreach (range(1, 50) as $index) {
            Population::create([
                'id' => now()->timestamp . $faker->unique()->randomNumber(),
                'year' => $faker->numberBetween(2017, 2022), // Random year between 2017 and 2022
                'count' => $faker->randomNumber(),
                'municipality_id' => $faker->randomElement($municipalityIds),
            ]);
        }
        
    }
}