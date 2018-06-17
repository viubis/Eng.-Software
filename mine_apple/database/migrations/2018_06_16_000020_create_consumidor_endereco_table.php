<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorEnderecoTable extends Migration
{
    public function up()
    {
        Schema::create('consumidor_endereco', function (Blueprint $table) {
            $table->integer('consumidor_id')->unsigned();
            $table->integer('endereco_id')->unsigned();

            $table->primary(['consumidor_id', 'endereco_id']);

            $table->index('consumidor_id', 'fk_consumidor_endereco_consumidor_idx');
            $table->index('endereco_id', 'fk_consumidor_endereco_endereco_idx');

            $table->foreign('consumidor_id', 'consumidor_endereco_consumidor_idx')
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
