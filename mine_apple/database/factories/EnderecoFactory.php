<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Endereco::class, function (Faker $faker) {
    return [
        'cep_id' => null,
        'rua' => $faker->streetName,
        'numero' => $faker->randomNumber(4),
        'complemento' => $faker->paragraph,
        'bairro' => $faker->streetSuffix,
    ];
});
