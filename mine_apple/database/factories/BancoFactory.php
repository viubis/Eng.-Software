<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Banco::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->company,
    ];
});
