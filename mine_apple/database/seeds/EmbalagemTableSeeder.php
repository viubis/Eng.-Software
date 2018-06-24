<?php

use Illuminate\Database\Seeder;

class EmbalagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('embalagem')->insert([
        	['id' => 1, 'tipo' => 'Unidade'],
        	['id' => 2, 'tipo' => 'Caixa'],
        	['id' => 3, 'tipo' => 'Litro'],
        	['id' => 4, 'tipo' => 'Quilo'],
        	['id' => 5, 'tipo' => 'Dúzia']
        ]);
    }
}
