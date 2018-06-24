<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoTable extends Migration
{
    public function up()
    {
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->integer('assinatura_id')->unsigned();
            $table->double('nota');
            $table->string('comentario')->nullable();

            $table->primary('assinatura_id');

            $table->foreign('assinatura_id', 'fk_avaliacao_assinatura')
                ->references('id')->on('assinatura')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('avaliacao');
    }
}
