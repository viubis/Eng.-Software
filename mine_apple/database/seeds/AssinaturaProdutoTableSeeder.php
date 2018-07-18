<?php

use Illuminate\Database\Seeder;
use mine_apple\Assinatura_Produto;


class AssinaturaProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assinatura_Produto::create([
        	'assinatura_id' => 1,
        	'produto_id' => 2,
        	'quantidade' => 2,
        	'frequencia' => 1,
        	'ter' => 1
        ]);

        Assinatura_Produto::create([
        	'assinatura_id' => 2,
        	'produto_id' => 2,
        	'quantidade' => 2,
        	'frequencia' => 1,
        	'ter' => 1
        ]);
    }
}
