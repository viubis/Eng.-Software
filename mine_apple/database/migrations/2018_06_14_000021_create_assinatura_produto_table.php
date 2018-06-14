<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssinaturaProdutoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'assinatura_produto';

    /**
     * Run the migrations.
     * @table assinatura_produto
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('assinatura_id');
            $table->integer('compra_id');
            $table->integer('consumidor_id');
            $table->integer('produto_id');
            $table->integer('categoria_id');
            $table->integer('produtor_id');
            $table->integer('quantidade');
            $table->integer('frequencia');
            $table->boolean('seg');
            $table->boolean('ter');
            $table->boolean('qua');
            $table->boolean('qui');
            $table->boolean('sex');
            $table->boolean('sab');
            $table->boolean('dom');

            $table->index(["produto_id", "categoria_id", "produtor_id"], 'fk_assinatura_produto_produto1_idx');


            $table->foreign('produto_id', 'fk_assinatura_produto_produto1_idx')
                ->references('id')->on('produto')
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
