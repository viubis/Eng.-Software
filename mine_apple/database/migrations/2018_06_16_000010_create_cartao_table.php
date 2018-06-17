<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaoTable extends Migration
{
    public function up()
    {
        Schema::create('cartao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero')->unique();
            $table->string('titular');
            $table->date('validade');
            $table->integer('codigo');
            $table->enum('tipo', ['c', 'd']);

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('cartao');
    }
}
