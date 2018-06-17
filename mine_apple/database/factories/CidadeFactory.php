<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Cidade::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->city,
    ];
});
