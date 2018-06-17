<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Foto::class, function (Faker $faker) {
    return [
        'produto_id' => null,
        'path' => $faker->imageUrl(),
    ];
});
