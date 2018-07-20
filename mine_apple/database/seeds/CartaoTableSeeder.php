<?php

use mine_apple\Cartao;
use Illuminate\Database\Seeder;

class CartaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cartao = new Cartao(['consumidor_id' => 1, 'numero' => '12345678789', 'titular' => 'Consumidor',  'validade'=>'11/2010', 'codigo'=>'491']);
        $cartao->save();
    }
}
