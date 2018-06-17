<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Consumidor::class, function (Faker $faker) {
    return [
        'usuario_id' => null,
        'cpf' => $faker->unique()->randomNumber(),
        'nome' => $faker->firstName,
        'sobrenome' => $faker->lastName,
        'sexo' => $faker->randomElement(['m', 'f']),
        'telefone' => $faker->randomNumber(),
        'acesso' => $faker->randomElement([true, false]),
    ];
});
