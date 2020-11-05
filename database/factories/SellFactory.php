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
    $r1 = random_int(1, 20);
    $r2 = random_int(1, 10);

    return [
        'good_id' => $r1,
        'customer_id' => $r2,
        'name' =>\App\Models\Good::find($r1)->name,
        'price' => $a = $faker->randomFloat(0, 5*$r1, 5*$r1+10),
        'amount' => $b = $faker->randomFloat(0, 1, 10),
        'money' => $a * $b,
        'date' => $faker->dateTimeBetween($m1, $m2, 'PRC'),
        'who' => str_random(5),
    ];
});
