<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Cep::class, function (Faker $faker) {
    return [
        'numero' => $faker->unique()->randomNumber(),
    ];
});
