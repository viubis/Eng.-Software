<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use mine_apple\User; 
class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
		'name' => 'exemplo',
		'email' => 'exemplo@exemplo.com',
		'password' => bcrypt('12345678'),
		]);
    }
}
