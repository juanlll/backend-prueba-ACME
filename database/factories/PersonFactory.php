<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'first_name'           => $faker->firstName,
        'second_name'          => $faker->firstName,
        'last_names'           => $faker->lastName,
        'address'              => $faker->address,
        'phone'                => rand(3000000000, 9999999999),
        'city_id'              => 1,
    ];
});
