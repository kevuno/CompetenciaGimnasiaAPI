<?php

use Faker\Generator as Faker;

$factory->define(App\Ciudad::class, function (Faker $faker) {
    return [
        'ciudad' => $faker->city,
        'estado' => $faker->state,
    ];
});
