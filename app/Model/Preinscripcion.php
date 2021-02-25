<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Preinscripcion extends Model
{
    protected $table = 'preinscripcion';
    protected $fillable = [
        'nombre', 'ape_paterno', 'ape_materno',
        'tipo_nomina','universo','numero_empleado','id_unidad_administrativa','id_sector', 'sector', 'clave_dependencia', 'nivel_salarial', 'seccion_sindical', 'curp', 'hora_entrada',
        'hora_salida', 'calle', 'numero','codigo_postal','colonia','alcaldia','updated_at','created_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = true;

}
