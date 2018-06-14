<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaoConsumidorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cartao_consumidor';

    /**
     * Run the migrations.
     * @table cartao_consumidor
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cartao_id');
            $table->integer('consumidor_id');

            $table->index(["cartao_id"], 'fk_cartao_consumidor_cartao1_idx');

            $table->index(["consumidor_id"], 'fk_cartao_consumidor_consumidor1_idx');


            $table->foreign('cartao_id', 'fk_cartao_consumidor_cartao1_idx')
                ->references('id')->on('cartao')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('consumidor_id', 'fk_cartao_consumidor_consumidor1_idx')
                ->references('id')->on('consumidor')
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
