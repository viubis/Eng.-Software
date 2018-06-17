<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Administrador::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
    ];
});
