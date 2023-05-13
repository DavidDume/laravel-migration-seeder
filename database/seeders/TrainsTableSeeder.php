<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<100; $i++) {

            $train = new Train();
            $train->departure_city = $faker->city();
            $train->arrival_city = $faker->city();
            $train->trainId = $faker->randomNumber(3, false);
            $train->date = $faker->dateTimeBetween('-1 day', '+1 week');;
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->on_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->num_carriages = $faker->randomDigit();
            $train->save();

        }
    }
}
