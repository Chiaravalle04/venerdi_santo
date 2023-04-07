<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Host;

// Helpers
use Faker\Generator as Faker;

class HostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            Host::create([
                'name' => $faker->firstName($gender = 'male'|'female'),
                'surname' => $faker->lastName(),
                'vote' => $faker->numberBetween(0, 5),
                'private' => $faker->boolean(),
                'image' => $faker->imageUrl(640, 480, 'people', true),
                'description' => $faker->paragraph(),
            ]);

        }
    }
}
