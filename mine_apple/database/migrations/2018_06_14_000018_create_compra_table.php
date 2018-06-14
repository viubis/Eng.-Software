<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'compra';

    /**
     * Run the migrations.
     * @table compra
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
            $table->integer('endereco_id')->unsigned();
            $table->integer('cep_id')->unsigned();
            $table->integer('cidade_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->date('data');
            $table->double('valor');
            $table->double('frete');

            $table->index(["consumidor_id"], 'fk_compra_consumidor1_idx');

            $table->index(["endereco_id", "cep_id", "cidade_id", "estado_id"], 'fk_compra_endereco1_idx');


            $table->foreign('consumidor_id', 'fk_compra_consumidor1_idx')
                ->references('id')->on('consumidor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('endereco_id', 'fk_compra_endereco1_idx')
                ->references('id')->on('endereco')
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
