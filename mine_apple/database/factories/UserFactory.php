<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
        'remember_token' => str_random(10),
    ];
});
