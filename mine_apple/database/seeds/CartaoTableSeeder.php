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
        DB::table('cartao')->insert([
            ['id' => 1, 'consumidor_id' => 1, 'numero_cartao' => '12345678789', 'titular' => 'Consumidor',
                'validade'=>'22/11/2010', 'codigo'=>'491'],
        ]);
    }
}
