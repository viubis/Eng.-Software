<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Log::class, function (Faker $faker) {
    return [
        'data' => $faker->date(),
        'hora' => $faker->time(),
        'operacao' => $faker->randomElement(['create', 'update', 'delete'])
    ];
});
