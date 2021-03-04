<?php

namespace App\Http\Controllers;

use App\Model\Preinscripcion;
use App\Model\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Validator;

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
        //dd('web');
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
           // dd($response);

            $array = json_decode($response, true);
            $array = json_decode($response, true);
            foreach ($array['data'] as $key => &$value) {
                if ($value === "0" || is_null($value)) {
                    $value = "DATO NO ENCONTRADO";
                }
            }
            $data['user'] = $array['data'];
           // dd($data['user']);

            return view('Infpreinscripcion', compact('data'));
        } catch (\Throwable $th) {
            return redirect('/pre-registro')->withErrors(['error' => 'RFC no se encuentra en nuestros registros']);
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
        // dd($request->all()); 
        DB::beginTransaction();
        try {
            Preinscripcion::create($request->all());
            //obtiene id de preinscripcion
            $id_preins = Preinscripcion::select('id')->orderByDesc('id')->get()->first();
            $id = $id_preins->id;
            $filename_prueba = $request->file('filename_prueba');
            $array_files = array(array($filename_prueba, "Documento de prueba"));

            $preinscripcionController = new PreinscripcionController;

            if ($preinscripcionController->setDoc($array_files, $id)) {
                DB::commit();
                return response()->json(['ok' => true, 'result' => 'Preinscripción con éxito', 'menor' => $request->nombre]);
                //return redirect('inicio')->with('mensaje', "Menor reinscrito con exito");
            } else {
                return response()->json(['ok' => false, 'result' => 'Error Preinscripción', 'err_valid_docs' => true]);
            }
            /* return redirect(route('pre-registro'))->with('status', '¡Preinscripcion Exitosa!');; */
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['ok' => false, 'result' => 'No se pudo realizar la Preinscripción']);
        }
    }

    public static function setDoc($uploadedFile, $id_reins)
    {
        $data = [];
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
