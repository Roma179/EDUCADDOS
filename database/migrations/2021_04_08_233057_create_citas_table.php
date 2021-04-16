<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('nivel_educativo_id')->nullable();
            $table->foreign('nivel_educativo_id')->references('id')->on('nivel_educativo')->onDelete('restrict')->onUpdate('restrict');
            $table->string('rfc',15);
            $table->string('start',50);
            $table->string('end',50);
            $table->string('title',250);
            $table->string('status',2);
            $table->string('asistio',2)->nullable();
            $table->string('penalizado',2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
