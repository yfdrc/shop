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

$factory->define(App\Models\Sell::class, function (Faker $faker) {
    $m1 = "2020-8-01";
    $m2 = "2020-10-30";
    $r = random_int(1, 3);
    switch ($r) {
        case 1:
            return [
                'good_id' => 1,
                'name' => "红茶01",
                'price' => $a = $faker->randomFloat(0, 40, 50),
                'amount' => $b = $faker->randomFloat(1, 1, 10),
                'money' => $a * $b,
                'date' => $faker->dateTimeBetween($m1, $m2, 'PRC'),
                'who' => str_random(5),
            ];
            break;

        case 2:
            return [
                'good_id' => 2,
                'name' => "绿茶01",
                'price' => $a = $faker->randomFloat(0, 60, 70),
                'amount' => $b = $faker->randomFloat(1, 1, 10),
                'money' => $a * $b,
                'date' => $faker->dateTimeBetween($m1, $m2, 'PRC'),
                'who' => str_random(5),
            ];
            break;

        case 3:
            return [
                'good_id' => 3,
                'name' => "铁观音",
                'price' => $a = $faker->randomFloat(0, 80, 90),
                'amount' => $b = $faker->randomFloat(1, 1, 10),
                'money' => $a * $b,
                'date' => $faker->dateTimeBetween($m1, $m2, 'PRC'),
                'who' => str_random(5),
            ];
            break;
    }
});
