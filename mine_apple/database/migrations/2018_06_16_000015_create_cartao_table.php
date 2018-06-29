<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaoTable extends Migration
{
    public function up()
    {
        Schema::create('cartao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consumidor_id')->unsigned();
            $table->string('numero_cartao');
            $table->string('titular');
            $table->string('validade');
            $table->string('codigo');
            $table->enum('tipo', ['c', 'd']);

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
