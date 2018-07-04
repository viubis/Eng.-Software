<?php

use mine_apple\Consumidor;
use Illuminate\Database\Seeder;

class ConsumidorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consumidor::create([
        	'usuario_id' => 1,
        	'cpf' => '123456',
        	'nome' => 'Consumidor',
        	'sobrenome' => 'Teste',
        	'sexo' => 'm',
        	'telefone' => 31232,
        	'acesso' => 1
        ]);
    }
}
