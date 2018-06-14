<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'foto';

    /**
     * Run the migrations.
     * @table foto
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('produto_id');
            $table->integer('categoria_id');
            $table->integer('produtor_id');
            $table->string('path');

            $table->index(["produto_id", "categoria_id", "produtor_id"], 'fk_foto_produto1_idx');


            $table->foreign('produto_id', 'fk_foto_produto1_idx')
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
