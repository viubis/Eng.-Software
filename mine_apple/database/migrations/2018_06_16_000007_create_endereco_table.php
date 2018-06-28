<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('cep_id')->unsigned();
            $table->integer('cidade_id')->unsigned();
            $table->integer('numero_cep');
            $table->string('rua');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');

            $table->index('cidade_id', 'fk_endereco_cidade_idx');

            $table->foreign('cidade_id', 'fk_endereco_cidade_idx')
                ->references('id')->on('cidade')
                ->onDelete('no action')
                ->onUpdate('no action');;

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
