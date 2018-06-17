<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Compra::class, function (Faker $faker) {
    return [
        'consumidor_id' => null,
        'endereco_id' => null,
        'data' => $faker->date(),
        'hora' => $faker->time(),
        'valor' => $faker->randomFloat(2, 0, 1000),
        'frete' => $faker->randomFloat(2, 0, 100),
    ];
});
