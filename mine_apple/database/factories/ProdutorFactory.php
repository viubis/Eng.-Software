<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Produtor::class, function (Faker $faker) {
    return [
        'usuario_id' => null,
        'endereco_id' => null,
        'cnpj' => $faker->unique()->randomNumber(),
        'nomeFantasia' => $faker->company,
        'razaoSocial' => $faker->company,
        'telefone' => $faker->randomNumber(),
        'raioEntrega' => $faker->randomFloat(1, 0, 100),
        'avaliacao' => $faker->randomDigit(),
        'acesso' => $faker->randomElement([true, false]),
    ];
});
