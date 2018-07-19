<?php

use mine_apple\Produtor;
use Illuminate\Database\Seeder;

class ProdutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produtor::create([
        	'usuario_id' => 2,
        	'endereco_id' => 1,
        	'cnpj' => '1332434',
        	'nomeFantasia' => 'Fantasia',
        	'razaoSocial' => 'Fantasia',
        	'telefone' => '213223',
        	'raioEntrega' => 20000,
        	'avaliacao' => 8,
        	'acesso' => 1
        ]);

        Produtor::create([
            'usuario_id' => 3,
            'endereco_id' => 1,
            'cnpj' => '123213',
            'nomeFantasia' => 'Fantasia',
            'razaoSocial' => 'Fantasia',
            'telefone' => '213223',
            'raioEntrega' => 30000,
            'avaliacao' => 8,
            'acesso' => 1
        ]);
    }
}
