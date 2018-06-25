<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadeTable extends Migration
{
    public function up()
    {
        Schema::create('cidade', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado_id')->unsigned();
            $table->string('nome');

            $table->index(['estado_id'], 'fk_cidade_estado_idx');

            $table->foreign('estado_id', 'fk_cidade_estado_idx')
                ->references('id')->on('estado')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('cidade');
    }
}
