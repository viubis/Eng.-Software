<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaTable extends Migration
{
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('banco_id')->unsigned();
            $table->integer('produtor_id')->unsigned();
            $table->string('numero');
            $table->integer('agencia');
            $table->integer('digito');

            $table->index('banco_id', 'fk_conta_banco_idx');
            $table->index('produtor_id', 'fk_conta_produtor_idx');

            $table->foreign('banco_id', 'fk_conta_banco_idx')
                ->references('id')->on('banco')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produtor_id', 'fk_conta_produtor_idx')
                ->references('usuario_id')->on('produtor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('conta');
    }
}
