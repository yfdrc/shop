<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Buy::class, function (Faker $faker) {
    $m1 = "2020-8-01";
    $m2 = "2020-10-30";
    $r = random_int(1, 3);
    switch ($r) {
        case 1:
            return [
                'good_id' => 1,
                'name' => "红茶01",
                'price' => $a = $faker->randomFloat(0, 20, 25),
                'amount' => $b = $faker->randomFloat(0, 20, 100),
                'money' => $a * $b,
                'date' => $faker->dateTimeBetween($m1, $m2, 'PRC'),
                'who' => str_random(5),
            ];
            break;

        case 2:
            return [
                'good_id' => 2,
                'name' => "绿茶01",
                'price' => $a = $faker->randomFloat(0, 30, 35),
                'amount' => $b = $faker->randomFloat(0, 20, 100),
                'money' => $a * $b,
                'date' => $faker->dateTimeBetween($m1, $m2, 'PRC'),
                'who' => str_random(5),
            ];
            break;

        case 3:
            return [
                'good_id' => 3,
                'name' => "铁观音",
                'price' => $a = $faker->randomFloat(0, 40, 45),
                'amount' => $b = $faker->randomFloat(0, 20, 100),
                'money' => $a * $b,
                'date' => $faker->dateTimeBetween($m1, $m2, 'PRC'),
                'who' => str_random(5),
            ];
            break;
    }
});
