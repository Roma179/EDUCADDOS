@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma EDUCAD')
@section('scripts')
{{--  <script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>  --}}
<script src="{{ URL::asset('js/idioma.js')}}" type="text/javascript"></script>
@endsection
@section('content')
<style>
    .margin-card {
        margin-bottom: 10%;
    }

    .btn-regresar {
        margin: 40px 20px 40px 0px;
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

<div class="container-fluid">
    <div class="card mt50 margin-card">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h2 class="cdmx-colorv">
                    Preinscripción
                </h2>
            </div>
            <div class="float-right">
                <form id="regForm" action="{{route('export-excel')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <button id="valida_curp" type="submit" title="Generar Reporte" class="btn btn-lg btn-dark"><i
                            class="fa fa-download"></i></button>
                </form>
            </div>
        </div>
        <div class="card-body" style="overflow: auto">
            <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
            {{-- <table class="table table-striped table-responsive-lg"> --}}
                <thead class="flip-content">
                    <tr>
                        <th>Nombre</th>
                        <th>Id Empleado</th>
                        <th>Tipo Nomina</th>
                        <th>Universo Nominal</th>
                        <th>Id Unidad Administrativa</th>
                        <th>Unidad Administrativa</th>
                        <th>Id Sector</th>
                        <th>Sector</th>
                        <th>Sector Pago</th>
                        <th>Nivel Salarial</th>
                        <th>Sección Sindical</th>
                        <th>Calle</th>
                        <th>Número Exterior</th>
                        <th>Número Interior</th>
                        <th>Código Postal</th>
                        <th>Colonia</th>
                        <th>Alcaldía</th>
                        <th>Estado</th>
                        <th>País</th>
                        <th>Correo Electrónico</th>
                        <th>Telefono Uno</th>
                        <th>Telefono Dos</th>
                        <th>Telefono Tres</th>
                        <th>Extensión</th>
                        <th>Nivel Estudios</th>
                        <th>Carrera</th>
                        <th>Solicitud</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista_preins as $caci)
                    <tr>
                        <td>{{$caci['nombre']}} {{$caci['ape_paterno']}} {{$caci['ape_materno']}}</td>
                        <td>{{$caci['id_empleado']}}</td>
                        <td>{{$caci['tipo_nomina']}}</td>
                        <td>{{$caci['universo_nominal']}}</td>
                        <td>{{$caci['id_unidad_administrativa']}}</td>
                        <td>{{$caci['unidad_administrativa']}}</td>
                        <td>{{$caci['id_sector']}}</td>
                        <td>{{$caci['sector']}}</td>
                        <td>{{$caci['sector_pago']}}</td>
                        <td>{{$caci['nivel_salarial']}}</td>
                        <td>{{$caci['seccion_sindical']}}</td>
                        <td>{{$caci['calle']}}</td>
                        <td>{{$caci['numero_ext']}}</td>
                        <td>{{$caci['numero_int']}}</td>
                        <td>{{$caci['codigo_postal']}}</td>
                        <td>{{$caci['colonia']}}</td>
                        <td>{{$caci['alcaldia']}}</td>
                        <td>{{$caci['estado']}}</td>
                        <td>{{$caci['pais']}}</td>
                        <td>{{$caci['correo_electro']}}</td>
                        <td>{{$caci['telefono_uno']}}</td>
                        <td>{{$caci['telefono_dos']}}</td>
                        @if ($caci['telefono_tres'] === null)
                        <td>Ninguno</td>
                        @else
                        <td>{{$caci['telefono_tres']}}</td>
                        @endif
                        @if ($caci['extension'] === null)
                        <td>Ninguno</td>
                        @else
                        <td>{{$caci['extension']}}</td>
                        @endif
                        <td>{{$caci['nivel_escol']}}</td>
                        @if ($caci['escolaridad'] === null)
                        <td>No Asignado</td>
                        @else
                        <td>{{$caci['escolaridad']}}</td>
                        @endif
                        <td>{{$caci['is_solicitud_aceptada']}}</td>
                        <td>
                            <span class="float-right">
                                <a class="btn btn-md btn-outline-primary"
                                    href="{{route('lista_documentos_inscr',$caci['id'])}}"
                                    title="Ver lista de documentos"><i class="fa fa-eye"></i></a>
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

<div class="modal fade" id="caciEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Cambia Menor a Otro CACI</h2>
              </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Centro de Atención y Cuidado Infantil:
                        </label>
                        <input type="text" class="form-control" id="id_caci" hidden>
                        <input type="text" class="form-control" id="tramite" value="inscripcion" hidden>
                        <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="caci">
                            <select style="font-size: 15px;" name="caci_nombre" id="caci_nombre" >
                                <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
                                <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
                                <option value="Bertha Von Glumer Leyva">Bertha Von Glumer Leyva</option>
                                <option value="Carolina Agazzi">Carolina Agazzi</option>
                                <option value="Carmen S">Carmen Serdán</option>
                            </select></h5>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i>
                    Cerrar</button>
                <button type="button" onclick="actualizarCaci('{{ csrf_token() }}')"
                    class="btn btn-primary"><i class="fa fa-edit"></i> Actualizar</button>
            </div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection