<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->integer('produtor_id')->unsigned();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->double('valor');
            $table->integer('minPorAssinatura');
            $table->integer('maxPorDia');
            $table->double('freteMax');
            $table->tinyInteger('seg');
            $table->tinyInteger('ter');
            $table->tinyInteger('qua');
            $table->tinyInteger('qui');
            $table->tinyInteger('sex');
            $table->tinyInteger('sab');
            $table->tinyInteger('dom');

            $table->index(['categoria_id'], 'fk_produto_categoria_idx');
            $table->index(['produtor_id'], 'fk_produto_produtor_idx');

            $table->foreign('categoria_id', 'fk_produto_categoria_idx')
                ->references('id')->on('categoria')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produtor_id', 'fk_produto_produtor_idx')
                ->references('usuario_id')->on('produtor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
