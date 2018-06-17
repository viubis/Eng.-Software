<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Administrador::class, function (Faker $faker) {
    return [
        'usuario_id' => null,
        'nome' => $faker->name,
    ];
});
