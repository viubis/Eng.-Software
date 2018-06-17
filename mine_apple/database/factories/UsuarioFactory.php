<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Usuario::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'senha' => $faker->password,
    ];
});
