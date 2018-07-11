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
            $table->tinyInteger('seg')->default(0);
            $table->tinyInteger('ter')->default(0);
            $table->tinyInteger('qua')->default(0);
            $table->tinyInteger('qui')->default(0);
            $table->tinyInteger('sex')->default(0);
            $table->tinyInteger('sab')->default(0);
            $table->tinyInteger('dom')->default(0);

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
