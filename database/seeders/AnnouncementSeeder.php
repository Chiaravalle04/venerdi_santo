<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Announcement;
use App\Models\Host;

// Helpers
use Faker\Generator as Faker;
use PhpParser\Node\Stmt\Foreach_;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $hostId = Host::inRandomOrder()->first()->id;

            Announcement::create([
                'host_id' => $hostId,
                'city'=> $faker->city(),
                'country' => $faker->country(),
                'price' => $faker->randomFloat(2, 10, 300),
                'vote' => $faker->numberBetween(0, 5),
                'image' => $faker->imageUrl(640, 480, 'people', true),
                'description' => $faker->paragraph(),
                'booked' => $faker->boolean(),
            ]);
        }
    }
}
