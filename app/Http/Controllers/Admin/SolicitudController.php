<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
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
    public function acceptSolicitud(Request $request)
    {
        /* dd($request->all()); */
        DB::table('preinscripcion')
            ->where('id', $request->id)
            ->update(['is_solicitud_aceptada' => $request->is_solicitud_aceptada]);
        
        return response()->json();
    }
}
