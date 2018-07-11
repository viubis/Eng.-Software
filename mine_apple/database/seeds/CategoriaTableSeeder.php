<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
        	['id' => 1, 'nome' => 'Cereais'],
        	['id' => 2, 'nome' => 'Frutas'],
        	['id' => 3, 'nome' => 'Legumes'],
        	['id' => 4, 'nome' => 'Leguminosas'],
        	['id' => 5, 'nome' => 'Raízes'],
        	['id' => 6, 'nome' => 'Tubérculos'],
        	['id' => 7, 'nome' => 'Verduras'],
        ]);
    }
}
