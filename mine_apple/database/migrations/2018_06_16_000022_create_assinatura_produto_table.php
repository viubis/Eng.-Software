<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssinaturaProdutoTable extends Migration
{
    public function up()
    {
        Schema::create('assinatura_produto', function (Blueprint $table) {
            $table->integer('assinatura_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->integer('quantidade');
            $table->integer('frequencia');
            $table->tinyInteger('seg');
            $table->tinyInteger('ter');
            $table->tinyInteger('qua');
            $table->tinyInteger('qui');
            $table->tinyInteger('sex');
            $table->tinyInteger('sab');
            $table->tinyInteger('dom');

            $table->primary(['assinatura_id', 'produto_id']);

            $table->index('assinatura_id', 'fk_assinatura_produto_assinatura_idx');
            $table->index('produto_id', 'fk_assinatura_produto_produto_idx');

            $table->foreign('assinatura_id', 'fk_assinatura_produto_assinatura_idx')
                ->references('id')->on('assinatura')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produto_id', 'fk_assinatura_produto_produto_idx')
                ->references('id')->on('produto')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('assinatura_produto');
    }
}
