<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0;$i < 10; $i++) {
            $travel = new Travel();
            $travel->name = $faker->firstName();
            $travel->surname = $faker->lastName();
            $travel->destination = $faker->state();
            $travel->departure = $faker->date();
            $travel->arrival = $faker->date();
            $travel->price = $faker->randomFloat(2, 99, 999999);
            $travel->description = $faker->paragraph();
            $travel->save();
        }
    }
}