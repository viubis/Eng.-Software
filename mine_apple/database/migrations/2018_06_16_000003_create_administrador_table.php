<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->string('nome');

            $table->primary('usuario_id');

            $table->foreign('usuario_id', 'fk_administrador_usuario_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('administrador');
    }
}
