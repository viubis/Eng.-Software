<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Estado::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->country,
        'sigla' => $faker->randomAscii . $faker->randomAscii,
    ];
});
