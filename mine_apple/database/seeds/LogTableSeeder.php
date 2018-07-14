<?php

use Illuminate\Database\Seeder;
use mine_apple\Log;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
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

    }
}
