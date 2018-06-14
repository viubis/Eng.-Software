<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssinaturaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'assinatura';

    /**
     * Run the migrations.
     * @table assinatura
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('compra_id');
            $table->integer('consumidor_id');
            $table->integer('produtor_id');
            $table->double('valor');
            $table->double('frete');
            $table->string('notaFiscal');
            $table->boolean('status');

            $table->index(["compra_id", "consumidor_id"], 'fk_assinatura_compra1_idx');

            $table->index(["produtor_id"], 'fk_assinatura_produtor1_idx');


            $table->foreign('compra_id', 'fk_assinatura_compra1_idx')
                ->references('id')->on('compra')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produtor_id', 'fk_assinatura_produtor1_idx')
                ->references('id')->on('produtor')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
