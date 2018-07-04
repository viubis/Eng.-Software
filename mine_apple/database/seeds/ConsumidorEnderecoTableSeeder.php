<?php

use mine_apple\ConsumidorEndereco;
use Illuminate\Database\Seeder;

class ConsumidorEnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConsumidorEndereco::create([
        	'consumidor_id' => 1,
        	'endereco_id' => 2
        ]);
    }
}
