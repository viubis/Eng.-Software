<?php

use Illuminate\Database\Seeder;
use mine_apple\User;

class UsuarioTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
        // id é 1
		'email' => 'consumidor@gmail.com',
		'password' => bcrypt('12345678'),
		]);

		User::create([
		// id é 2
		'email' => 'produtor@gmail.com',
		'password' => bcrypt('12345678'),
		]);

		User::create([
		// id é 3
		'email' => 'administrador@gmail.com',
		'password' => bcrypt('12345678'),
		]);

		/*User::create([
			'email' => 'usuario@gmail.com',
			'password' => bcrypt('12345678')
		]);

		User::create([
			'email' => 'administrador@gmail.com',
		    'password' => bcrypt('12345678')
		]);*/


    }
}
