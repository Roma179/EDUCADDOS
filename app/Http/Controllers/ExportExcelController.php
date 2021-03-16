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
			'Nombre', 'Apellido Paterno', 'Apellido Materno',
			'Id Empleado', 'Tipo Nomina', 'Universo Nominal', 'Id Unidad Administrativa', 'Unidad Administrativa', 'Id Sector', 'Sector',
			'Sector Pago','Nivel Salarial','Seccion Sindical','Calle','Número Exterior','Número Interior','Código Postal','Colonia','Alcaldía',
			'Estado','País','Correo Electrónico','Telefono Uno','Telefono Dos','Telefono Tres','Extensión','Solicitud',
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
				'solicitud' =>
				$menor->is_solicitud_aceptada,
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
