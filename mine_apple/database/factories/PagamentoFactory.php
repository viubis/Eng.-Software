<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Pagamento::class, function (Faker $faker) {
    return [
        'assinatura_id' => null,
        'cartao_id' => null,
        'data' => $faker->date(),
        'hora' => $faker->time(),
        'valor' => $faker->randomFloat(2, 0, 1000),
    ];
});
