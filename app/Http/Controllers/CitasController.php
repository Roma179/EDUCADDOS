<?php

namespace App\Http\Controllers;

use App\Model\Citas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getCitas()
    {
        $citas = Citas::where('status', '1')->where('asistio', '-1')->get();
        /* $citas = Citas::orderBy('id')->get(); */
        /* dd($citas->title); */
        return response()->json([$citas]);
    }
    public function getCitasAdmin()
    {
        $citas = Citas::where('asistio', '-1')->where('penalizado', '-1')->get();
        /* $citas = Citas::orderBy('id')->get(); */
        /* dd($citas->title); */
        return response()->json([$citas]);
    }
    public function setAsistencia(Request $request)
    {
        /* dd($request->id_cita); */
        DB::table('citas')
            ->where('id', $request->id_cita)
            ->update(['asistio' => '1']);
        return response()->json(['mensaje' => 'Los cambios se han realizado.']);
    }
    public function penalizar(Request $request)
    {
        /* dd($request->id_cita); */
        DB::table('citas')
            ->where('id', $request->id_cita)
            ->update(['penalizado' => '1']);
        return response()->json(['mensaje' => 'Los cambios se han realizado.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        /* $citasController = new CitasController;
        $citasController->_validations(); */
        /* $rfc = Citas::where('status', '1')->where('rfc', $request->rfc)->count(); */
        $rfc = Citas::where('rfc', $request->rfc)->where('nivel_educativo_id', $request->nivel_edu)->count();
        $isPenalizado = Citas::where('status', '-1')->where('penalizado', '1')->where('rfc', $request->rfc)->count();
        if ($rfc === 0) {
            if ($isPenalizado >= 1) {
                Session::flash('error', '¡El Usuario con este RFC esta Penalizado tendra que esperar 3 dias habiles para generar una nueva cita!');

                return redirect(url('Inscripcion'));
            } else {
                $join_fecha_hora = $request->fecha_select . "T" . $request->horario_select;
                $minutos = substr($request->horario_select, 3, -3);
                $covert_hora_end = '';
                if ($minutos === '00') {
                    $covert_hora_end = substr_replace($request->horario_select, '30', -5, -3);
                } else {
                    $covert_hora_end = substr_replace($request->horario_select, '00', -5, -3);
                    $hora = intval(substr($covert_hora_end, 0, 2)) + 1;
                    /* dd(intval(substr($covert_hora_end,0,2))+1); */
                    $hora_str = strval($hora);
                    if (strlen($hora_str) == 1) {
                        $hora = '0' . $hora_str;
                    } elseif (strlen($hora_str) == 2) {
                        $hora = $hora_str;
                    }
                    /* dd($covert_hora_end); */
                    $covert_hora_end = substr_replace($covert_hora_end, $hora, 0, 2);
                }
                $join_fecha_hora_end = $request->fecha_select . "T" . $covert_hora_end;
                $input = $request->except(['fecha_select', 'horario_select']);
                /* dd(array_merge($input,['start'=>$join_fecha_hora,'end'=>$join_fecha_hora_end,'title'=>'Reservado'])); */

                Citas::create(array_merge($input, ['start' => $join_fecha_hora, 'end' => $join_fecha_hora_end, 'title' => 'Reservado', 'status' => '1', 'asistio' => '-1', 'penalizado' => '-1', 'nivel_educativo_id' => $request->nivel_edu]));
                Session::flash('mensaje', '¡La cita ha sido registrada!');

                return redirect(url('Inscripcion'));
            }
        } else if ($rfc >= 1) {
            /* $nivel_educativo = Citas::where('rfc', $request->rfc)->where('nivel_educativo_id', $request->nivel_edu)->get(); */
            /* dd($nivel_educativo->all()); */
            if ($isPenalizado >= 1) {
                Session::flash('error', '¡El Usuario con este RFC esta Penalizado tendra que esperar 3 dias habiles para generar una nueva cita!');

                return redirect(url('Inscripcion'));
            } else {
                Session::flash('warning', '¡El Usuario con este RFC y nivel de estudios ya cuenta con una cita registrada!');

                return redirect(url('Inscripcion'));
            }
            /* else if($request-){

            } */
        }
    }

    private function _validations()
    {
        $rules = [
            'rfc' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',
            'fecha' => 'required|string',
            'horario' => 'required|string',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
