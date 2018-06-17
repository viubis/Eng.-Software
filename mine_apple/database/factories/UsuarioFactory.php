<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Usuario::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->email,
        'senha' => $faker->password,
    ];
});
