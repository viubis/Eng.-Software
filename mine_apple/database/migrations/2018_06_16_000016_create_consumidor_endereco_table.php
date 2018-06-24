<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorEnderecoTable extends Migration
{
    public function up()
    {
        Schema::create('consumidor_endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consumidor_id')->unsigned();
            $table->integer('endereco_id')->unique()->unsigned();

            $table->index(['consumidor_id'], 'fk_consumidor_endereco_consumidor_idx');
            $table->index(['endereco_id'], 'fk_consumidor_endereco_endereco_idx');

            $table->foreign('consumidor_id', 'fk_consumidor_endereco_consumidor_idx')
                ->references('usuario_id')->on('consumidor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('endereco_id', 'fk_consumidor_endereco_endereco_idx')
                ->references('id')->on('endereco')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('consumidor_endereco');
    }
}
