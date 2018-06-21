<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraTable extends Migration
{
    public function up()
    {
        Schema::create('compra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('endereco_id')->unsigned();
            $table->date('data');
            $table->time('hora');
            $table->double('valor');
            $table->double('frete');

            $table->index('endereco_id', 'fk_compra_endereco_idx');

            $table->foreign('endereco_id', 'fk_compra_endereco_idx')
                ->references('id')->on('endereco')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('compra');
    }
}