<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCepTable extends Migration
{
    public function up()
    {
        Schema::create('cep', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cidade_id')->unsigned();
            $table->integer('numero')->unique();

            $table->index('cidade_id', 'fk_cep_cidade_idx');

            $table->foreign('cidade_id', 'fk_cep_cidade_idx')
                ->references('id')->on('cidade')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('cep');
    }
}
