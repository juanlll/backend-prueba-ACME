<?php

use Faker\Generator as Faker;

$factory->define(App\Models\City::class, function (Faker $faker) {
    return [
        'name'            => $faker->city,
        'status'          => 1,
    ];
});
