<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'conta';

    /**
     * Run the migrations.
     * @table conta
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('banco_id')->unsigned();
            $table->integer('produtor_id')->unsigned();
            $table->integer('numero');
            $table->integer('agencia');
            $table->integer('digito');

            $table->index(["banco_id"], 'fk_conta_banco1_idx');

            $table->index(["produtor_id"], 'fk_conta_produtor1_idx');

            $table->unique(["numero"], 'numero_UNIQUE');


            $table->foreign('produtor_id', 'fk_conta_produtor1_idx')
                ->references('id')->on('produtor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('banco_id', 'fk_conta_banco1_idx')
                ->references('id')->on('banco')
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
