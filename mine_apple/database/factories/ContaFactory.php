<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Conta::class, function (Faker $faker) {
    return [
        'banco_id' => null,
        'produtor_id' => null,
        'numero' => $faker->bankAccountNumber,
        'agencia' => $faker->randomNumber(3),
        'digito' => $faker->randomDigit,
    ];
});
