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
            $table->integer('consumidor_id')->unsigned();
            $table->integer('cep_id')->unsigned();
            $table->string('rua');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');

            $table->index('consumidor_id', 'fk_endereco_consumidor_idx');
            $table->index('cep_id', 'fk_endereco_cep_idx');

            $table->foreign('consumidor_id', 'fk_endereco_consumidor_idx')
                ->references('usuario_id')->on('consumidor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('cep_id', 'fk_endereco_cep_idx')
                ->references('id')->on('cep')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
