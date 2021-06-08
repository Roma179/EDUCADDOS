<?php

namespace App\Http\Controllers;

use App\Model\Preinscripcion;
use App\Model\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PreinscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('validar_rfc_etapa1');
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

    public function getwebservice(Request $request)
    {
        $numRfc = Preinscripcion::where('rfc', $_POST["RFC"])->count();
        /* dd($numRfc); */
        if ($numRfc === 0) {
            try {
                $RFC = $_POST["RFC"];
                $tokenId = "SistemaDeRpueba4as4x4vdlsad";
                //dd('bueno');

                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => "10.1.181.9:9003/usuarios/loadUserCASI",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{\n \"security\":\n {\n \"tokenId\":\"$tokenId\"\n },\n \"data\":\n {\n \"RFC\":\"$RFC\"\n }\n \n}",
                    CURLOPT_HTTPHEADER => array("Content-Type:application/json"),

                ));
                $response = curl_exec($ch);
                curl_close($ch);
                /* dd($response); */

                $array = json_decode($response, true);
                /* $array = json_decode($response, true); */
                foreach ($array['data_adicional'] as $key => &$value) {
                    if ($value === "0" || is_null($value)) {
                        $value = "DATO NO ENCONTRADO";
                    }
                }
                $arrayRfc = ['rfc' => $RFC];
                $data['user'] = array_merge($array['data'], $array['data_adicional'], $arrayRfc);
                /* dd($data['user']); */

                return view('Infpreinscripcion', compact('data'));
            } catch (\Throwable $th) {
                return redirect('/pre-registro')->withErrors(['error' => 'RFC no se encuentra en nuestros registros']);
            }
        } else {
            return redirect('/pre-registro')->withErrors(['error' => 'Este RFC se encuentra actualmente con una solicitud en proceso de revisión por lo que no puede generar un nuevo registro. De haber existido un error, puede comunicarse a los datos que se proporcionan en la página de Contacto']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $rules = [
            'rfc' => 'required',
            'nombre' => 'required|string',
            'ape_paterno' => 'required|string',
            'ape_materno' => 'required|string',

            'id_empleado' => 'required|string',
            'tipo_nomina' => 'required|string',
            'universo_nominal' => 'required|string',
            'id_unidad_administrativa' => 'required|string',

            'unidad_administrativa' => 'required|string',
            'id_sector' => 'required|string',
            'sector' => 'required|string',

            'sector_pago' => 'required|string',
            'nivel_salarial' => 'required|string',
            'seccion_sindical' => 'required|string',
            'calle' => 'required|string',
            'numero_ext' => 'required|string',
            'numero_int' => 'required|string',
            'codigo_postal' => 'required|numeric',

            'colonia' => 'required|string',
            'alcaldia' => 'required|string',
            'colonia' => 'required|string',
            'estado' => 'required|string',
            'pais' => 'required|string',
            'correo_electro' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i',

            'telefono_uno' => 'required|numeric',
            'telefono_dos' => 'required|numeric',
            
            'is_solicitud_aceptada' => 'required|string',
            'status_empleado' => 'required|string',
            'nivel_escol' => 'required|string',
            'escolaridad' => 'required|string',

            'filename_acta_nacimiento' => 'mimes:pdf,docx|max:2048',
            'filename_curp' => 'mimes:pdf,docx|max:2048',
            'filename_comprobante_domicilio' => 'mimes:pdf,docx|max:2048',
            'filename_ine' => 'mimes:pdf,docx|max:2048',
            'filename_recibo_nomina' => 'mimes:pdf,docx|max:2048',
            'filename_certif_estudio' => 'mimes:pdf,docx|max:2048',
            'filename_cedula_maestria' => 'mimes:pdf,docx|max:2048'
        ];

        $messages = [

            'rfc.required' => 'Su rfc es requerido',
            'nombre.required' => 'Su nombre es requerido',
            'nombre.string' => 'Su nombre debe ser un texto',
            'ape_paterno.required' => 'Su apellido paterno es requerido',
            'ape_paterno.string' => 'Su apellido paterno debe ser un texto',
            'ape_materno.required' => 'Su apellido materno es requerido',
            'ape_materno.string' => 'Su apellido materno debe ser un texto',

            'id_empleado.required' => 'Su id_empleado es requerido',
            'id_empleado.string' => 'Su id_empleado debe ser un texto',
            'tipo_nomina.required' => 'Su tipo_nomina es requerido',
            'tipo_nomina.string' => 'Su tipo_nomina debe ser un texto',
            'universo_nominal.required' => 'Su universo_nominal es requerido',
            'universo_nominal.string' => 'Su universo_nominal debe ser un texto',
            'id_unidad_administrativa.required' => 'Su id_unidad_administrativa es requerido',
            'id_unidad_administrativa.string' => 'Su id_unidad_administrativa debe ser un texto',
            'unidad_administrativa.required' => 'Su unidad_administrativa es requerido',
            'unidad_administrativa.string' => 'Su unidad_administrativa debe ser un texto',

            'id_sector.required' => 'Su id_sector es requerido',
            'id_sector.string' => 'Su id_sector debe ser un texto',
            'sector.required' => 'Su sector es requerido',
            'sector.string' => 'Su sector debe ser un texto',
            'sector_pago.required' => 'Su sector_pago es requerido',
            'sector_pago.string' => 'Su sector_pago debe ser un texto',
            'nivel_salarial.required' => 'Su nivel_salarial es requerido',
            'nivel_salarial.string' => 'Su nivel_salarial debe ser un texto',
            'seccion_sindical.required' => 'Su seccion_sindical es requerido',
            'seccion_sindical.string' => 'Su seccion_sindical debe ser un texto',
            'calle.required' => 'Su calle es requerido',
            'calle.string' => 'Su calle debe ser un texto',

            'numero_ext.required' => 'El numero exterior es requerido',
            'numero_ext.string' => 'El numero exterior debe ser un texto',
            'numero_int.required' => 'Su numero interior es requerido',
            'numero_int.string' => 'Su numero interior debe ser un texto',
            'codigo_postal.required' => 'Su codigo_postal es requerido',
            'codigo_postal.numeric' => 'Su codigo_postal debe ser un número',
            'colonia.required' => 'Su colonia es requerido',
            'colonia.date' => 'Su colonia debe ser una fecha',
            'alcaldia.required' => 'Su alcaldia es requerido',
            'alcaldia.string' => 'Su alcaldia debe ser texto',
            'estado.required' => 'Su estado es requerido',
            'estado.string' => 'Su estado debe ser texto',

            'pais.required' => 'Su pais es requerido',
            'pais.string' => 'Su pais debe ser texto',

            'correo_electro.required' => 'Su email es requerido',
            'correo_electro.regex' => 'Su email no tiene el formato correcto',
            'telefono_uno.required' => 'Su telefono Uno es requerido',
            'telefono_uno.numeric' => 'Su telefono Uno debe ser un número',
            'telefono_dos.required' => 'Su telefono Dos es requerido',
            'telefono_dos.numeric' => 'Su telefono Dos debe ser un número',

            'is_solicitud_aceptada.required' => 'Su solicitud es requerido',
            'is_solicitud_aceptada.string' => 'Su solicitud debe ser string',
            'status_empleado.required' => 'Su estatus empleado es requerido',
            'status_empleado.string' => 'Su estatus empleado debe ser string',
            'nivel_escol.required' => 'Su nivel de escolaridad es requerido',
            'nivel_escol.string' => 'Su nivel de escolaridad debe ser string',
            'escolaridad.required' => 'Su escolaridad es requerido',
            'escolaridad.string' => 'Su escolaridad debe ser string',

            'filename_acta_nacimiento.mimes' => 'El acta de nacimiento no es valido',
            'filename_acta_nacimiento.max' => 'El acta de nacimiento no debe de exceder el tamaño de 2Mb',
            'filename_curp.mimes' => 'La curp no es valido',
            'filename_curp.max' => 'La curp no debe de exceder el tamaño de 2Mb',
            'filename_comprobante_domicilio.mimes' => 'El comprobante de domicilio no es valido',
            'filename_comprobante_domicilio.max' => 'El comprobante de domicilio no debe de exceder el tamaño de 2Mb',
            'filename_ine.mimes' => 'El INE no es valido',
            'filename_ine.max' => 'El INE no debe de exceder el tamaño de 2Mb',
            'filename_recibo_nomina.mimes' => 'El recibo de nomina no es valido',
            'filename_recibo_nomina.max' => 'El recibo de nomina no debe de exceder el tamaño de 2Mb',
            'filename_certif_estudio.mimes' => 'El certificado de estudio no es valido',
            'filename_certif_estudio.max' => 'El certificado de estudio no debe de exceder el tamaño de 2Mb',
            'filename_cedula_maestria.mimes' => 'La cedula profesional no es valido',
            'filename_cedula_maestria.max' => 'La cedula profesional no debe de exceder el tamaño de 2Mb'
        ];
        //dd($request->all()); 
        /* $validator = Validator::make($request->all(), $rules, $messages);            
        if ($validator->fails()) {
            dd($validator->errors());
        }else{
            dd("no pos si esta chida la validacion");
        } */
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), $rules, $messages);            
            if ($validator->fails()) {
                return response()->json(['ok' => false, 'result' => $validator->errors()->all(), 'err_valid' => true]);
            } else {
                Preinscripcion::create($request->all());
                //obtiene id de preinscripcion
                $id_preins = Preinscripcion::select('id')->orderByDesc('id')->get()->first();
                $id = $id_preins->id;
                $array_files = [];
                if ($request->nivel_escol == 'maestria') {
                    //aqui se agrega el file titulo y la cedula profesional
                    $filename_certif_estudio = $request->file('filename_certif_estudio');
                    $filename_cedula_maestria = $request->file('filename_cedula_maestria');
                    $filename_acta_nacimiento = $request->file('filename_acta_nacimiento');
                    $filename_curp = $request->file('filename_curp');
                    $filename_comprobante_domicilio = $request->file('filename_comprobante_domicilio');
                    $filename_ine = $request->file('filename_ine');
                    $filename_recibo_nomina = $request->file('filename_recibo_nomina');

                    $array_files = array(
                        array($filename_certif_estudio, "Título Profesional"), array($filename_cedula_maestria, "Cédula Profesional"), array($filename_acta_nacimiento, "Acta de Nacimiento"),
                        array($filename_curp, "Curp"), array($filename_comprobante_domicilio, "Comprobante de Domicilio"),
                        array($filename_ine, "INE"), array($filename_recibo_nomina, "Nomina")
                    );
                } else {
                    $filename_certif_estudio = $request->file('filename_certif_estudio');
                    $filename_acta_nacimiento = $request->file('filename_acta_nacimiento');
                    $filename_curp = $request->file('filename_curp');
                    $filename_comprobante_domicilio = $request->file('filename_comprobante_domicilio');
                    $filename_ine = $request->file('filename_ine');
                    $filename_recibo_nomina = $request->file('filename_recibo_nomina');

                    $array_files = array(
                        array($filename_certif_estudio, "Certicado de Estudios"), array($filename_acta_nacimiento, "Acta de Nacimiento"),
                        array($filename_curp, "Curp"), array($filename_comprobante_domicilio, "Comprobante de Domicilio"),
                        array($filename_ine, "INE"), array($filename_recibo_nomina, "Nomina")
                    );
                }

                $preinscripcionController = new PreinscripcionController;

                if ($preinscripcionController->setDoc($array_files, $id)) {
                    DB::commit();
                    return response()->json(['ok' => true, 'result' => 'Preinscripción con éxito', 'menor' => $request->nombre]);
                } else {
                    return response()->json(['ok' => false, 'result' => 'Error Preinscripción', 'err_valid_docs' => true]);
                }
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la Preinscripción']);
        }
    }

    public static function setDoc($uploadedFile, $id_reins)
    {
        $data = [];
        //dd($uploadedFile);
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
                foreach ($value as $valueNombreTramite) {
                    //procesa el archivo
                    if (!is_string($valueNombreTramite)) {
                        //dd($valueNombreTramite);
                        $filename = time() . ' ' . $valueNombreTramite->getClientOriginalName();
                        //guarda en sistema de archivos
                        $valueNombreTramite->move('uploads/documentos', $filename);
                        //inserta en la bd
                        $data['nombre'] = $filename;
                    } else {
                        //procesa el nombre del tramite
                        //dd($valueNombreTramite);
                        $data['tipo_documento'] = $valueNombreTramite;
                        $data['preinscripcion_id'] = $id_reins;
                        $data['created_at'] = now();
                        Documentos::create($data);
                    }
                }
            }
            return true;
        } else {
            return false;
        }
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
