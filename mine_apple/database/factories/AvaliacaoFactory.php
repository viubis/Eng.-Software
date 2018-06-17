<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Avaliacao::class, function (Faker $faker) {
    return [
        'assinatura_id' => null,
        'nota' => $faker->randomDigit % 6,
        'avaliacao' => $faker->paragraph,
    ];
});
