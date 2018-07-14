<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->date('data');
            $table->time('hora');
            $table->integer('operacao_id')->unsigned();

            $table->index(['usuario_id'], 'fk_log_usuario_idx');

            $table->index(['operacao_id'], 'fk_log_operacao_idx');

            $table->foreign('usuario_id', 'fk_log_usuario_idx')
                ->references('id')->on('usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('operacao_id', 'fk_log_operacao_idx')
                ->references('id')->on('operacao')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('log');
    }
}
