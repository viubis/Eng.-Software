<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Cep::class, function (Faker $faker) {
    return [
        'cidade_id' => null,
        'numero' => $faker->unique()->randomNumber(),
    ];
});
