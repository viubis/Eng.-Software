<?php

use Illuminate\Database\Seeder;
use mine_apple\Log;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 3 consumidor e 6 para produtor
     * @return void
     */
    public function run()
    {

    	Log::create([
    		'usuario_id' => 1,
    		'data' => '2010-07-10',
    		'hora' => '15:30:00',
    		'operacao_id' => 1

    	]);

    	Log::create([
    		'usuario_id' => 2,
    		'data' => '2018-09-10',
    		'hora' => '11:30:10',
    		'operacao_id' => 1

    	]);

        Log::create([
            'usuario_id' => 1,
            'data' => '2018-01-10',
            'hora' => '09:50:00',
            'operacao_id' => 3

        ]);

        Log::create([
            'usuario_id' => 1,
            'data' => '2018-01-10',
            'hora' => '06:30:19',
            'operacao_id' => 3

        ]);

        Log::create([
            'usuario_id' => 2,
            'data' => '2018-06-02',
            'hora' => '16:30:19',
            'operacao_id' => 6

        ]);

        Log::create([
            'usuario_id' => 2,
            'data' => '2018-06-09',
            'hora' => '22:30:19',
            'operacao_id' => 6

        ]);

        Log::create([
            'usuario_id' => 2,
            'data' => '2018-03-10',
            'hora' => '18:30:19',
            'operacao_id' => 6

        ]);

    }
}
