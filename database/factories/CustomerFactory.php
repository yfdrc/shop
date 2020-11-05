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

$factory->define(App\Models\Customer::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->words(3,true),
        'address' => $faker->words(4,true),
        'telephone' => $faker->phoneNumber,
    ];

});
