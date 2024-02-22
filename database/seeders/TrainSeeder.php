<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Company;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 3; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->arrival = $faker->city();
            $new_train->departure = $faker->city();

            if ($i < 2) {
                $new_train->arrival_time = $faker->date('now');
                $new_train->departure_time = $faker->date('now');
            } else {
                $new_train->arrival_time = $faker->time('h:i');
                $new_train->departure_time = $faker->time('h:i');
            }

            $new_train->train_code = $faker->randomNumber(6, true);
            $new_train->carriages = $faker->randomDigit();
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->ereased = $faker->numberBetween(0, 1);
            $new_train->save();
        };
    }
}
