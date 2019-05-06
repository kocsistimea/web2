<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utazas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('megnevezes');
            $table->string('rovidleiras');
            $table->integer('ar');
            $table->string('hosszuleiras');
            $table->date('datum');
            $table->string('helyszin');
            $table->integer('maxletszam');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utazas');
    }
}
