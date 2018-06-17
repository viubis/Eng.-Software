<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Cidade::class, function (Faker $faker) {
    return [
        'estado_id' => null,
        'nome' => $faker->unique()->city,
    ];
});
