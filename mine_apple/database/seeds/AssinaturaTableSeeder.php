<?php

use Illuminate\Database\Seeder;
use mine_apple\Assinatura;

class AssinaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assinatura::create([
        	'compra_id' => 1,
        	'produtor_id' => 2,
        	'valor' => 20,
        	'frete' => 20,
        	'notaFiscal' => 'XSAD12',
        	'status' => 1

        ]);

        Assinatura::create([
        	'compra_id' => 2,
        	'produtor_id' => 2,
        	'valor' => 20,
        	'frete' => 20,
        	'notaFiscal' => 'XSAD12',
        	'status' => 1

        ]);
    }
}
