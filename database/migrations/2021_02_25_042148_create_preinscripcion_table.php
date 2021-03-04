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
            $table->string('id_empleado',30);            
            $table->string('tipo_nomina',150);
            //$table->string('universo',20);
            $table->string('universo_nominal',30);
            //$table->string('numero_empleado',100);
            $table->string('id_unidad_administrativa',100);
            $table->string('unidad_administrativa',100);
            $table->string('id_sector',50);
            $table->string('sector',100);
            $table->string('sector_pago',100);
            $table->string('nivel_salarial',50);
            $table->string('seccion_sindical',100);
           // $table->string('clave_dependencia',50);
            $table->string('calle',50);
            $table->string('numero_ext',10);
            $table->string('numero_int',10);
            //$table->string('numero',100);
            $table->string('codigo_postal',10);
            $table->string('colonia',100);
            $table->string('alcaldia',100);
            $table->string('estado',50);
            $table->string('pais',50);
            $table->string('correo_electro',50);
            $table->string('telefono_uno',50);
            $table->string('telefono_dos',50);
            $table->string('telefono_tres',50);
            $table->string('extension',50);

            $table->timestamps();
            
            /*$table->string('curp',50);
            $table->string('hora_entrada',50);
            $table->string('hora_salida',50);*/
            
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
