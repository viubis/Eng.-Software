<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            //UsuarioTableSeeder::class,
            BancoTableSeeder::class,
            CategoriaTableSeeder::class,
            EmbalagemTableSeeder::class,
            EstadoTableSeeder::class,
        ]);

        


        //Usuários de teste
        $usr = new \mine_apple\User(['email' => 'usuario@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();

        $usr = new \mine_apple\User(['email' => 'administrador@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();
        $usr->administrador()->save(factory(mine_apple\Administrador::class)->make());

        $usr = new \mine_apple\User(['email' => 'consumidor@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();
        $usr->consumidor()->save(factory(mine_apple\Consumidor::class)->make());

        $usr = new \mine_apple\User(['email' => 'produtor@gmail.com', 'password' => bcrypt('12345678')]);
        $usr->save();

        $end = factory(mine_apple\Estado::class)->create()->cidades()->save(factory(mine_apple\Cidade::class)->make())->ceps()->save(factory(mine_apple\Cep::class)->make())->enderecos()->save(factory(mine_apple\Endereco::class)->make());
        $pro = factory(\mine_apple\Produtor::class)->make();
        $pro->endereco_id = $end->id;

        $usr->produtor()->save($pro);

    }
}
