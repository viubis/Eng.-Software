<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentoTable extends Migration
{
    public function up()
    {
        Schema::create('pagamento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assinatura_id')->unsigned();
            $table->integer('cartao_id')->unsigned();
            $table->date('data');
            $table->time('hora');
            $table->double('valor');

            $table->index('cartao_id', 'fk_pagamento_cartao1_idx');
            $table->index('assinatura_id', 'fk_pagamento_assinatura_idx');

            $table->foreign('cartao_id', 'fk_pagamento_cartao_idx')
                ->references('id')->on('cartao')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('assinatura_id', 'fk_pagamento_assinatura_idx')
                ->references('id')->on('assinatura')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagamento');
    }
}
