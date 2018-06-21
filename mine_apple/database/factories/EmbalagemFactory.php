<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Embalagem::class, function (Faker $faker) {
    return [
        'tipo' => $faker->unique()->companySuffix,
    ];
});
