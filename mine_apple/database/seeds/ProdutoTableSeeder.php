<?php

use mine_apple\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();


        Produto::create([
        	'produtor_id' => 2,
        	'categoria_id' => 1,
        	'embalagem_id' => 1,
        	'nome' => 'Teste',
        	'descricao' => 'Teste de descricao',
        	'valor' => 12.7,
        	'minPorAssinatura' => 5,
        	'maxPorDia' => 20,
        	'freteMax' => 12,
        	'seg' => false,
        	'ter' => true,
        	'qua' => false,
        	'qui' => true,
        	'sex' => true,
        	'sab' => true,
        	'dom' => true
        ]);

        foreach (range(1,20) as $index) {
            DB::table('produto')->insert([
                'produtor_id' => 2,
                'categoria_id' => random_int(1,7),
                'embalagem_id' => random_int(1,5),
                'nome' => $faker->name,
                'descricao' => $faker->name,
                'valor' => random_int(1,50),
                'minPorAssinatura' => random_int(1,10),
                'maxPorDia' => random_int(1,50),
                'freteMax' => random_int(1,40),
                'seg' => true,
                'ter' => true,
                'qua' => true,
                'qui' => true,
                'sex' => false,
                'sab' => false,
                'dom' => false
                
            ]);
    }
}
}