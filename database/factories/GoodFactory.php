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

$factory->define(App\Models\Good::class, function (Faker $faker) {

    return [
        'cat_id' => random_int(1, 5),
        'name' => $faker->words(1,true),
        'from' => $faker->words(3,true),
    ];

});
