<?php

use mine_apple\Produto;
use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
