<?php

use Illuminate\Database\Seeder;
use mine_apple\Avaliacao;

class AvaliacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Avaliacao::create([
        	'assinatura_id' => 1,
        	'nota' => 8,
        ]);

        Avaliacao::create([
        	'assinatura_id' => 2,
        	'nota' => 5,
        ]);
    }
}
