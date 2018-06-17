<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Produto::class, function (Faker $faker) {
    return [
        'categoria_id' => null,
        'produtor_id' => null,
        'nome' => $faker->companySuffix,
        'descricao' => $faker->paragraph,
        'valor' => $faker->randomFloat(2, 0, 100),
        'minPorAssinatura' => $faker->randomDigit,
        'maxPorDia' => $faker->randomNumber(3),
        'freteMax' => $faker->randomFloat(2, 0, 10),
        'seg' => $faker->randomElement([true, false]),
        'ter' => $faker->randomElement([true, false]),
        'qua' => $faker->randomElement([true, false]),
        'qui' => $faker->randomElement([true, false]),
        'sex' => $faker->randomElement([true, false]),
        'sab' => $faker->randomElement([true, false]),
        'dom' => $faker->randomElement([true, false]),
    ];
});
