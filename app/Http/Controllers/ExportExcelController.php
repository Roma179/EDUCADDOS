<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
/* use excel; */
use App\Exports\PreinscripcionExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Session;

class ExportExcelController extends Controller
{
	public function index()
	{
		$data_preins = DB::table('preinscripcion')->get();
		return view('export_excel')->with('data_preins', $data_preins);
	}

	public function excel()
	{

		$data_preins = DB::table('preinscripcion')->get()->toArray();

		$menor_array[] = array(
			'nombre', 'ape_paterno', 'ape_materno',
			'tipo_nomina', 'universo', 'numero_empleado', 'id_unidad_administrativa', 'id_sector', 'sector', 'clave_dependencia', 'nivel_salarial', 'seccion_sindical', 'curp', 'hora_entrada',
			'hora_salida', 'calle', 'numero', 'codigo_postal', 'colonia', 'alcaldia'
		);
		foreach ($data_preins as $menor) {
			$menor_array[] = array(
				'nombre_tutor'  => $menor->nombre,
				'apellido_paterno_tutor'   => $menor->ape_paterno,
				'apellido_materno_tutor'    => $menor->ape_materno,
				'calle'  => $menor->tipo_nomina,
				'numero_domicilio'  => $menor->universo,
				'colonia'  => $menor->numero_empleado,
				'alcaldia'  => $menor->id_unidad_administrativa,
				'codigo_postal'  => $menor->id_sector,
				'tipo_nomina'   => $menor->sector,
				'numero_empleado'   => $menor->clave_dependencia,
				'numero_plaza'   => $menor->nivel_salarial,
				'clave_dependencia'   => $menor->seccion_sindical,
				'nivel_salarial'   => $menor->curp,
				'seccion_sindical'   => $menor->hora_entrada,
				'horario_laboral_entrada'   => $menor->hora_salida,
				'horario_laboral_salida'   => $menor->calle,
				'email'   => $menor->numero,
				'telefono_uno'   => $menor->codigo_postal,
				'telefono_dos'   => $menor->colonia,
				'nombre_menor'   => $menor->alcaldia
			);
		}

		/* Excel::download/Excel::store('Datos Menor', function ($excel) use ($menor_array) {
			$excel->setTitle('Datos Preinscripcion');
			$excel->sheet('Datos Preinscripcion', function ($sheet) use ($menor_array) {
				$sheet->fromArray($menor_array, null, 'A1', false, false);
			});
		}); */

		$export = new PreinscripcionExport($menor_array);

    	return Excel::download($export, 'Datos_Preinscripcion.xlsx');
	}
}
