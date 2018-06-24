<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutorTable extends Migration
{
    public function up()
    {
        Schema::create('produtor', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->integer('cnpj')->unique();
            $table->string('nomeFantasia');
            $table->string('razaoSocial');
            $table->integer('telefone');
            $table->double('raioEntrega');
            $table->double('avaliacao');
            $table->tinyInteger('acesso');

            $table->primary('usuario_id');

            $table->foreign('usuario_id', 'fk_produtor_usuario_idx')
                ->references('id')->on('usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtor');
    }
}
