<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pagamento';

    /**
     * Run the migrations.
     * @table pagamento
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('consumidor_id')->unsigned();
            $table->integer('compra_id')->unsigned();
            $table->integer('assinatura_id')->unsigned();
            $table->integer('cartao_id')->unsigned();
            $table->date('data');
            $table->time('hora');
            $table->double('valor');

            $table->index(["cartao_id"], 'fk_pagamento_cartao1_idx');

            $table->index(["assinatura_id", "compra_id", "consumidor_id"], 'fk_pagamento_assinatura1_idx');


            $table->foreign('cartao_id', 'fk_pagamento_cartao1_idx')
                ->references('id')->on('cartao')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('assinatura_id', 'fk_pagamento_assinatura1_idx')
                ->references('id')->on('assinatura')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
