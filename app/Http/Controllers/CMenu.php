<?php

namespace App\Http\Controllers;

use App\Model\Citas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMenu extends Controller
{

    public function convocatoria()
    {
        return view('convocatoria2020');
    }
    public function etapa1()
    {
        return view('etapa1');
    }
    public function etapa2()
    {
        return view('etapa2');
    }
    public function etapa3()
    {
        //caduca las citas que ya son pasadas a la fecha de hoy
        $hoy = date("Y-m-d");
        $citas = Citas::where('status', '1')->get();
        if (sizeof($citas) >= 1) {
            foreach ($citas as $key => $value) {
                $id = $value->id;
                $fecha = substr($value->start, 0, 10);
                if ($fecha < $hoy) {
                    DB::table('citas')
                        ->where('id', $id)
                        ->update(['status' => '-1']);
                }
            }
        }
        //evalua los usuarios penalizados y les quita la penalizacion en caso de haber ya pasado el tiempo de penalizacion
        $citas_pena = Citas::where('penalizado', '1')->get();
        /* dd(sizeof($citas_pena)); */
        if (sizeof($citas_pena) >= 1) {
            foreach ($citas_pena as $key => $value) {
                $id = $value->id;
                $fecha = substr($value->start, 0, 10);
                $fecha_pasada = date_create($fecha);
                $fecha_hoy = date_create($hoy);
                $interval = date_diff($fecha_pasada, $fecha_hoy);
                $num_dias = intval($interval->format('%a%'));
                if ($num_dias > 3) {
                    DB::table('citas')
                        ->where('id', $id)
                        ->delete();
                }
            }
        }
        return view('etapa3');
    }
    public function contacto()
    {
        return view('contacto');
    }

    public function preinscripcion()
    {
        return view('Infpreinscripcion');
    }
    public function pruebass()
    {
        return view('archivo');
    }
}
