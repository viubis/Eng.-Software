<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoTable extends Migration
{
    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produto_id')->unsigned();
            $table->string('path');

            $table->index('produto_id', 'fk_foto_produto_idx');

            $table->foreign('produto_id', 'fk_foto_produto_idx')
                ->references('id')->on('produto')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto');
    }
}
