<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'endereco';

    /**
     * Run the migrations.
     * @table endereco
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('cep_id')->unsigned();
            $table->integer('cidade_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');

            $table->index(["cep_id", "cidade_id", "estado_id"], 'fk_endereco_cep1_idx');


            $table->foreign('cep_id', 'fk_endereco_cep1_idx')
                ->references('id')->on('cep')
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
