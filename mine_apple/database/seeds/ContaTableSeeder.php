<?php

use mine_apple\Conta;
use Illuminate\Database\Seeder;

class ContaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conta')->insert([
            ['id' => 1, 'banco_id' => 1, 'produtor_id' => 1, 'numero' => '1234567',
                'agencia'=>11339, 'digito'=>1],
        ]);

    }
}
