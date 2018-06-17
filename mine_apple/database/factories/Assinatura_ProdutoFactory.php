<?php

use Faker\Generator as Faker;

$factory->define(mine_apple\Assinatura_Produto::class, function (Faker $faker) {
    return [
        'assinatura_id' => null,
        'produto_id' => null,
        'quantidade' => $faker->randomNumber(2),
        'frequencia' => $faker->randomDigit,
        'seg' => $faker->randomElement([true, false]),
        'ter' => $faker->randomElement([true, false]),
        'qua' => $faker->randomElement([true, false]),
        'qui' => $faker->randomElement([true, false]),
        'sex' => $faker->randomElement([true, false]),
        'sab' => $faker->randomElement([true, false]),
        'dom' => $faker->randomElement([true, false]),
    ];
});
