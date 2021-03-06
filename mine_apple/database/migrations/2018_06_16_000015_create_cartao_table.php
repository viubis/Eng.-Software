<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaoTable extends Migration
{
    public function up()
    {
        Schema::create('cartao', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('consumidor_id')->unsigned();
            $table->string('numero', 255);
            $table->string('titular');
            $table->string('validade');
            $table->string('codigo', 255);

            $table->index('consumidor_id', 'fk_cartao_consumidor_idx');

            $table->foreign('consumidor_id', 'fk_cartao_consumidor_idx')
                ->references('usuario_id')->on('consumidor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('cartao');
    }
}
