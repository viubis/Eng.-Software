<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaoConsumidorTable extends Migration
{
    public function up()
    {
        Schema::create('cartao_consumidor', function (Blueprint $table) {
            $table->integer('cartao_id')->unsigned();
            $table->integer('consumidor_id')->unsigned();

            $table->primary(['cartao_id', 'consumidor_id']);

            $table->index('cartao_id', 'fk_cartao_consumidor_cartao_idx');
            $table->index('consumidor_id', 'fk_cartao_consumidor_consumidor_idx');

            $table->foreign('cartao_id', 'cartao_consumidor_cartao_idx')
                ->references('id')->on('cartao')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('consumidor_id', 'fk_cartao_consumidor_consumidor_idx')
                ->references('usuario_id')->on('consumidor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('cartao_consumidor');
    }
}
