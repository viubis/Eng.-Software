<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Cartao::class, function (Faker $faker) {
    return [
        'numero' => $faker->unique()->creditCardNumber,
        'titular' => $faker->name,
        'validade' => $faker->creditCardExpirationDateString,
        'codigo' => $faker->randomNumber(3),
        'tipo' => $faker->randomElement(['c', 'd']),
    ];
});
