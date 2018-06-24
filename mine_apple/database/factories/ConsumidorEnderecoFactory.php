<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\ConsumidorEndereco::class, function (Faker $faker) {
    return [
        'consumidor_id' => null,
        'endereco_id' => null,
    ];
});
