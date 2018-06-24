<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            //UsuarioTableSeeder::class,
        ]);

        //Adiciona as categorias
        \mine_apple\Categoria::create(['nome' => 'Cereais']);
        \mine_apple\Categoria::create(['nome' => 'Frutas']);
        \mine_apple\Categoria::create(['nome' => 'Legumes']);
        \mine_apple\Categoria::create(['nome' => 'Leguminosas']);
        \mine_apple\Categoria::create(['nome' => 'Raízes']);
        \mine_apple\Categoria::create(['nome' => 'Tubérculos']);
        \mine_apple\Categoria::create(['nome' => 'Verduras']);

        //Adiciona os tipos de embalagens
        \mine_apple\Embalagem::create(['tipo' => 'Unidade']);
        \mine_apple\Embalagem::create(['tipo' => 'Caixa']);
        \mine_apple\Embalagem::create(['tipo' => 'Litro']);
        \mine_apple\Embalagem::create(['tipo' => 'Quilo']);
        \mine_apple\Embalagem::create(['tipo' => 'Dúzia']);


        //Usuários de teste
        $usr = new \mine_apple\User(['email' => 'usuario@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();

        $usr = new \mine_apple\User(['email' => 'administrador@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();
        $usr->administrador()->save(factory(mine_apple\Administrador::class)->make());

        $usr = new \mine_apple\User(['email' => 'consumidor@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();
        $usr->administrador()->save(factory(mine_apple\Consumidor::class)->make());

        $usr = new \mine_apple\User(['email' => 'produtor@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();
        $usr->administrador()->save(factory(mine_apple\Produtor::class)->make());

    }
}
