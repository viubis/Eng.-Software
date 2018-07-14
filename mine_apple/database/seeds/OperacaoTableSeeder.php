<?php

use Illuminate\Database\Seeder;
use mine_apple\Operacao;

class OperacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operacao::create([
    		'id' => 1,
    		'nome' => 'Cadastro'
    	]);

    	Operacao::create([
    		'id' => 2,
    		'nome' => 'Compra'
    	]);

    	Operacao::create([
    		'id' => 3,
    		'nome' => 'Banimento administrador'
    	]);

    	Operacao::create([
    		'id' => 4,
    		'nome' => 'Banimento consumidor'
    	]);

    	Operacao::create([
    		'id' => 5,
    		'nome' => 'Adição de produto'
    	]);

    }
}
