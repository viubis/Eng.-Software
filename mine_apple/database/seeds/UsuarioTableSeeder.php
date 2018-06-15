<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Usuario; 
class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
		'email' => 'exemplo@exemplo.com',
		'senha' => bcrypt('12345678'),
		]);
    }
}
