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
            $table->integer('endereco_id')->unsigned();
            $table->string('cnpj')->unique();
            $table->string('nomeFantasia');
            $table->string('razaoSocial');
            $table->integer('telefone')->nullable();
            $table->double('raioEntrega');
            $table->double('avaliacao');
            $table->tinyInteger('acesso');

            $table->primary('usuario_id');

            $table->index(['endereco_id'], 'fk_produtor_endereco_idx');

            $table->foreign('usuario_id', 'fk_produtor_usuario_idx')
                ->references('id')->on('usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('endereco_id', 'fk_produtor_endereco_idx')
                ->references('id')->on('endereco')
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
