<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbalagemTable extends Migration
{
    public function up()
    {
        Schema::create('embalagem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo')->unique();

            $table->engine = 'InnoDB';
        });
    }

    public function down()
    {
        Schema::dropIfExists('embalagem');
    }
}
