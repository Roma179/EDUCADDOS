<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreinscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preinscripcion', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',100);
            $table->string('ape_paterno',50);
            $table->string('ape_materno',50);
            $table->string('tipo_nomina',150);
            $table->string('universo',20);
            $table->string('numero_empleado',100);
            $table->integer('id_unidad_administrativa',100);
            $table->integer('id_sector',20);
            $table->string('sector',30);
            $table->string('clave_dependencia',50);
            $table->string('nivel_salarial',50);
            $table->string('seccion_sindical',100);
            $table->string('curp',50);
            $table->string('hora_entrada',50);
            $table->string('hora_salida',50);
            $table->string('calle',50);
            $table->string('numero',100);
            $table->string('codigo_postal',15);
            $table->string('colonia',15);
            $table->string('alcaldia',100);
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
        Schema::dropIfExists('preinscripcion');
    }
}
