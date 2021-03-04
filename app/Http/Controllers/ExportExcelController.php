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
			'id_empleado', 'tipo_nomina', 'universo_nominal', 'id_unidad_administrativa', 'unidad_administrativa', 'id_sector', 'sector',
			'sector_pago','nivel_salarial','seccion_sindical','calle','numero_ext','numero_int','codigo_postal','colonia','alcaldia',
			'estado','pais','correo_electro','telefono_uno','telefono_dos','telefono_tres','extension',
		);
		foreach ($data_preins as $menor) {
			$menor_array[] = array(
				'nombre_tutor'  => $menor->nombre,
				'apellido_paterno_tutor'   => $menor->ape_paterno,
				'apellido_materno_tutor'    => $menor->ape_materno,
				'id_empleado' =>
				$menor->id_empleado,
				'tipo_nomina' =>
				$menor->tipo_nomina,
				'universo_nominal' =>
				$menor->universo_nominal,
				'id_unidad_administrativa' =>
				$menor->id_unidad_administrativa,
				'unidad_administrativa' =>
				$menor->unidad_administrativa,
				'id_sector' =>
				$menor->id_sector,
				'sector' =>
				$menor->sector,
				'sector_pago' =>
				$menor->sector_pago,
				'nivel_salarial' =>
				$menor->nivel_salarial,
				'seccion_sindical' =>
				$menor->seccion_sindical,
				'calle' =>
				$menor->calle,
				'numero_ext' =>
				$menor->numero_ext,
				'numero_int' =>
				$menor->numero_int,
				'codigo_postal' =>
				$menor->codigo_postal,
				'colonia' =>
				$menor->colonia,
				'alcaldia' =>
				$menor->alcaldia,
				'estado' =>
				$menor->estado,
				'pais' =>
				$menor->pais,
				'correo_electro' =>
				$menor->correo_electro,
				'telefono_uno' =>
				$menor->telefono_uno,
				'telefono_dos' =>
				$menor->telefono_dos,
				'telefono_tres' =>
				$menor->telefono_tres,
				'extension' =>
				$menor->extension,
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
