<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Assinatura::class, function (Faker $faker) {
    return [
        'compra_id' => null,
        'produtor_id' => null,
        'valor' => $faker->randomFloat(2, 0, 1000),
        'frete' => $faker->randomFloat(2, 0, 100),
        'notaFiscal' => $faker->md5,
        'status' => $faker->randomElement([true, false]),
    ];
});
