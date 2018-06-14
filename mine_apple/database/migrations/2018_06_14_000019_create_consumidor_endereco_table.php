<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorEnderecoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'consumidor_endereco';

    /**
     * Run the migrations.
     * @table consumidor_endereco
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('consumidor_id');
            $table->integer('endereco_id');
            $table->integer('cep_id');
            $table->integer('cidade_id');
            $table->integer('estado_id');

            $table->index(["endereco_id", "cep_id", "cidade_id", "estado_id"], 'fk_consumidor_endereco_endereco1_idx');

            $table->index(["consumidor_id"], 'fk_consumidor_endereco_consumidor1_idx');


            $table->foreign('consumidor_id', 'fk_consumidor_endereco_consumidor1_idx')
                ->references('id')->on('consumidor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('endereco_id', 'fk_consumidor_endereco_endereco1_idx')
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
