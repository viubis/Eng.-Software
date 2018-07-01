<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorTable extends Migration
{
    public function up()
    {
        Schema::create('consumidor', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->string('sobrenome');
            $table->enum('sexo', ['m', 'f'])->nullable();
            $table->integer('telefone')->nullable();
            $table->tinyInteger('acesso');

            $table->primary('usuario_id');

            $table->foreign('usuario_id', 'fk_consumidor_usuario_idx')
                ->references('id')->on('usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('consumidor');
    }
}
