@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
    <script src="{{URL::asset('js/valida_solicitud_preinscripcion.js')}}" type="text/javascript"> </script> 
@endsection
@section('content')
<style>
    .card-uno {
        margin: 0px 10px 50px 70px;
    }
    .card-dos {
        margin: 0px 0px 50px 60px;
    }

    .card-title {
        margin-top: 10px;
        text-align: center;
    }

    .sub-card-body {
        overflow: auto;
        height: 500px;
    }

    h3 {
        text-align: center;
    }

    .font-label {
        text-align: center;
        font-style: normal;
        font-size: 15px;
        margin-top: 5px;
        margin-left: 5px;
    }
    .row-margin {
        margin:10px; 
        padding: 10px;
    }
    .btn-regresar{
        margin: 0px 20px 40px 0px;
    }
    .empleado_activo {
        background-color: #0FA433;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 20px;
        font-family: Arial;
        border-radius: 4px;
        width: 115px;
    }
    .empleado_inactivo {
        background-color: #ED073B;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 20px;
        font-family: Arial;
        border-radius: 4px;
        width: 120px;
    }
    .solic_aceptada {
        background-color: #0FA433;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 15px;
        font-family: Arial;
        border-radius: 4px;
        width: 200px;
    }
    .solic_rechazada {
        background-color: #ED073B;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 15px;
        font-family: Arial;
        border-radius: 4px;
        width: 200px;
    }
</style>
<br>
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/animsition/css/animsition.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet">

<link href="{{ asset('css/util.css') }}" rel="stylesheet">

<link href="{{ asset('css/main.css') }}" rel="stylesheet">

<div class="container">
    <div class="card mt50">
        <div class="card-header">
            @if ($lista_preinscripcion[0]['is_solicitud_aceptada'] == 'Por Validar')
                <div>
                    <span class="float-right">
                        <input id="id_empleado" value="<?php echo $lista_preinscripcion[0]['id']?>" hidden/>
                        <button class="btn btn-lg btn-success" onclick="validar_solicitud('Aceptada')"
                            title="Aceptar"><i class="fa fa-check-circle"></i> Aceptar</button>
                        <button class="btn btn-lg btn-danger" onclick="validar_solicitud('Rechazada')"
                            title="Rechazar"><i class="fa fa-times"></i> Rechazar</button>
                    </span>
                </div>
            @elseif($lista_preinscripcion[0]['is_solicitud_aceptada'] == 'Aceptada')
                <div>
                    <span class="float-right">
                        <div class="row solic_aceptada" style="margin-right: 2rem;"><label class="font-label" style="font-size: 15px;">Solicitud Aceptada</label></div>
                    </span>
                </div>
            @elseif($lista_preinscripcion[0]['is_solicitud_aceptada'] == 'Rechazada')
                <div>
                    <span class="float-right">
                        <div class="row solic_rechazada" style="margin-right: 2rem;"><label class="font-label" style="font-size: 15px;">Solicitud Rechazada</label></div>
                    </span>
                </div>                
            @endif
            <h1><i class="fa fa-file"></i> Valida Preinscripci&oacute;n</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="card mt50 card-uno col-md-5 col-lg-5 col-xl-5">
                    <div class="card-title">
                        <h1>Datos</h1>
                    </div>
                    <div class="card-body sub-card-body">
                        @foreach ($lista_preinscripcion as $preinsc)
                        @if ($preinsc->status_empleado == 'Activo')
                            <div class="row empleado_activo" style="margin-left: 11rem;"><label class="font-label" style="font-size: 20px;">{{$preinsc->status_empleado}}</label></div>
                        @else
                            <div class="row empleado_inactivo" style="margin-left: 11rem;"><label class="font-label" style="font-size: 20px;">{{$preinsc->status_empleado}}</label></div>
                        @endif
                        <div class="row row-margin"><h3>Nombre:</h3><label class="font-label">{{$preinsc->nombre}} {{$preinsc->ape_paterno}} {{$preinsc->ape_materno}}</label></div>
                        
                        <div class="row row-margin"><h3>Nivel Escolaridad:</h3><label class="font-label">{{$preinsc->nivel_escol}}</label></div>
                        @if ($preinsc->escolaridad == null)
                            <div class="row row-margin"><h3>Carrera:</h3><label class="font-label">No asignada</label></div>
                        @else
                            <div class="row row-margin"><h3>Carrera:</h3><label class="font-label">{{$preinsc->escolaridad}}</label></div>
                        @endif
                        <div class="row row-margin"><h3>id_empleado:</h3><label class="font-label">{{$preinsc->id_empleado}}</label></div>
                        <div class="row row-margin"><h3>tipo_nomina:</h3><label class="font-label">{{$preinsc->tipo_nomina}}</label></div>
                        <div class="row row-margin"><h3>universo_nominal:</h3><label class="font-label">{{$preinsc->universo_nominal}}</label></div>
                        <div class="row row-margin"><h3>id_unidad_administrativa:</h3><label class="font-label">{{$preinsc->id_unidad_administrativa}}</label></div>
                        <div class="row row-margin"><h3>unidad_administrativa:</h3><label class="font-label">{{$preinsc->unidad_administrativa}}</label></div>
                        
                        <div class="row row-margin"><h3>id_sector:</h3><label class="font-label">{{$preinsc->id_sector}}</label></div>
                        <div class="row row-margin"><h3>sector:</h3><label class="font-label">{{$preinsc->sector}}</label></div>
                        <div class="row row-margin"><h3>sector_pago:</h3><label class="font-label">{{$preinsc->sector_pago}}</label></div>
                        <div class="row row-margin"><h3>nivel_salarial:</h3><label class="font-label">{{$preinsc->nivel_salarial}}</label></div>
                        <div class="row row-margin"><h3>seccion_sindical:</h3><label class="font-label">{{$preinsc->seccion_sindical}}</label></div>
                        <div class="row row-margin"><h3>calle:</h3><label class="font-label">{{$preinsc->calle}}</label></div>

                        <div class="row row-margin"><h3>numero_ext:</h3><label class="font-label">{{$preinsc->numero_ext}}</label></div>
                        <div class="row row-margin"><h3>numero_int:</h3><label class="font-label">{{$preinsc->numero_int}}</label></div>
                        <div class="row row-margin"><h3>codigo_postal:</h3><label class="font-label">{{$preinsc->codigo_postal}}</label></div>

                        <div class="row row-margin"><h3>colonia:</h3><label class="font-label">{{$preinsc->colonia}}</label></div>
                        <div class="row row-margin"><h3>alcaldia:</h3><label class="font-label">{{$preinsc->alcaldia}}</label></div>
                        <div class="row row-margin"><h3>estado:</h3><label class="font-label">{{$preinsc->estado}}</label></div>
                        <div class="row row-margin"><h3>pais:</h3><label class="font-label">{{$preinsc->pais}}</label></div>
                        <div class="row row-margin"><h3>correo_electro:</h3><label class="font-label">{{$preinsc->correo_electro}}</label></div>
                        <div class="row row-margin"><h3>telefono_uno:</h3><label class="font-label">{{$preinsc->telefono_uno}}</label></div>
                        <div class="row row-margin"><h3>telefono_dos:</h3><label class="font-label">{{$preinsc->telefono_dos}}</label></div>
                        @if ($preinsc->telefono_tres == null)
                            <div class="row row-margin"><h3>telefono_tres:</h3><label class="font-label">Ninguno</label></div>
                        @else
                            <div class="row row-margin"><h3>telefono_tres:</h3><label class="font-label">{{$preinsc->telefono_tres}}</label></div>
                        @endif
                        @if ($preinsc->extension == null)
                            <div class="row row-margin"><h3>extension:</h3><label class="font-label">Ninguno</label></div>   
                        @else
                            <div class="row row-margin"><h3>extension:</h3><label class="font-label">{{$preinsc->extension}}</label></div>   
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="card mt50 card-dos col-md-5 col-lg-5 col-xl-5">
                    <div class="card-title">
                        <h1>Lista de Documentos</h1>
                    </div>
                    <div class="card-body sub-card-body">
                        <table class="table table-striped table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Fecha de Creacion</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $doc)
                                <tr>
                                    <td>{{$doc->tipo_documento}}</td>
                                    <td>{{$doc->created_at}}</td>
                                    <td class="actions">
                                        <span class="float-right">
                                            <a class="btn btn-lg btn-outline-success"
                                                href="{{url('uploads/documentos/'.$doc->nombre)}}"
                                                title="Ver Detalles Documento" target="_blank"><i
                                                    class="fa fa-file"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="float-right btn-regresar">
                <a class="btn btn-lg btn-primary" href="{{route('lista_preinscripcion')}}"
                    title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
            </span>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endsection