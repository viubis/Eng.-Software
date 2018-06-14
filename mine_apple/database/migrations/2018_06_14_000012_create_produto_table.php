<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'produto';

    /**
     * Run the migrations.
     * @table produto
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('categoria_id');
            $table->integer('produtor_id');
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->double('valor');
            $table->integer('minPorAssinatura');
            $table->integer('maxPorDia');
            $table->double('freteMax');
            $table->boolean('seg');
            $table->boolean('ter');
            $table->boolean('qua');
            $table->boolean('qui');
            $table->boolean('sex');
            $table->boolean('sab');
            $table->boolean('dom');

            $table->index(["produtor_id"], 'fk_produto_produtor1_idx');

            $table->index(["categoria_id"], 'fk_produto_categoria1_idx');


            $table->foreign('produtor_id', 'fk_produto_produtor1_idx')
                ->references('id')->on('produtor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('categoria_id', 'fk_produto_categoria1_idx')
                ->references('id')->on('categoria')
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
