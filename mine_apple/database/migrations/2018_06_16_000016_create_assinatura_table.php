<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssinaturaTable extends Migration
{
    public function up()
    {
        Schema::create('assinatura', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id')->unsigned();
            $table->integer('produtor_id')->unsigned();
            $table->double('valor');
            $table->double('frete');
            $table->string('notaFiscal');
            $table->tinyInteger('status');

            $table->index('compra_id', 'fk_assinatura_compra_idx');
            $table->index('produtor_id', 'fk_assinatura_produtor_idx');

            $table->foreign('compra_id', 'fk_assinatura_compra_idx')
                ->references('id')->on('compra')
                ->onDelete('no action')
                ->onUpdate('no action');


            $table->foreign('produtor_id', 'fk_assinatura_produtor_idx')
                ->references('usuario_id')->on('produtor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('assinatura');
    }
}
