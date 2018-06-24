<?php

use Illuminate\Database\Seeder;
use mine_apple\User;

class UsuarioTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
		'email' => 'exemplo@exemplo.com',
		'password' => bcrypt('12345678'),
		]);
    }
}
