<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Preinscripcion extends Model
{
    protected $table = 'preinscripcion';
    protected $fillable = [
        'nombre', 'ape_paterno', 'ape_materno','id_empleado',
        'tipo_nomina',
        'universo_nominal',
        'numero_empleado',
        'id_unidad_administrativa',
        'unidad_administrativa',
        'id_sector', 
        'sector',
        'sector_pago', 
        'clave_dependencia',
        'nivel_salarial', 
        'nivel_salarial', 
        'seccion_sindical', 
        'curp', 
        'calle', 
        'numero_ext',
         'numero_int',
         'numero',
         'codigo_postal',
         'colonia',
         'alcaldia',
         'estado',
         'pais',
         'correo_electro',
         'telefono_uno',
         'telefono_dos',
         'telefono_tres',
         'extension',
         'nivel_escol',
         'escolaridad',
         'created_at',
         'updated_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = true;

}
