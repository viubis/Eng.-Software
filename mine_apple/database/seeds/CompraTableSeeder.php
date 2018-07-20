<?php

use Illuminate\Database\Seeder;
use mine_apple\Compra;

class CompraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compra::create([
        	'consumidor_endereco_id' => 1,
        	'consumidor_id' =>1,
        	'data' => '2018-07-05',
        	'hora' => '15:10:00',
        	'valor' => 20.0,
        	'frete' => 5.0
        ]);

        Compra::create([
        	'consumidor_endereco_id' => 1,
            'consumidor_id' =>1,
        	'data' => '2018-08-05',
        	'hora' => '17:10:00',
        	'valor' => 20.0,
        	'frete' => 5.0
        ]);
    }
}
