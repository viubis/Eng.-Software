<?php

use mine_apple\Endereco;
use Illuminate\Database\Seeder;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Endereco::create([
        	// Endereco para produtor teste, id é 1
        	'cidade_id' => 20,
        	'numero_cep' => '44004336',
        	'rua' => 'Rua',
        	'numero' => 42,
        	'complemento' => NULL,
        	'bairro' => 'Bairro'

        ]);

        Endereco::create([
        	// Endereco para consumidor teste, id é 2
        	'cidade_id' => 24,
        	'numero_cep' => '44007208',
        	'rua' => 'Rua',
        	'numero' => 42,
        	'complemento' => NULL,
        	'bairro' => 'Bairro'
        ]);


    }
}
