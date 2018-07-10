<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financa', function (Blueprint $table) {
            $table->integer('usuario_id')->unsigned();
            $table->float('saldo_disponivel')->default('0.0');
            $table->float('valor_a_receber')->default('0.0');
            $table->timestamps();

            $table->primary('usuario_id');
            $table->foreign('usuario_id', 'fk_produtor_financas_idx')
                ->references('usuario_id')->on('produtor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financas');
    }
}
