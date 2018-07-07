<?php

use mine_apple\Administrador;
use Illuminate\Database\Seeder;

class AdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrador::create([
        	'usuario_id' => 3,
        	'nome' => 'Administrador'
        ]);
    }
}
