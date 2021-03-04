@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma EDUCAD')
{{-- @section('scripts')
<script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
<script src="{{ URL::asset('js/idioma.js')}}" type="text/javascript"></script>
@endsection --}}
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
        {{-- <h1 style="margin-left: 10px;">Bienvenido {{auth()->user()->name}}</h1> --}}
        {{-- <div class="card-header">
            <div class="float-right">
                <form id="regForm" action="{{route('export-excel')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <button id="valida_curp" type="submit" title="Generar Reporte" class="btn btn-lg btn-dark"><i
                            class="fa fa-download"></i></button>
                </form>
            </div>
            <h2><i class="fa fa-book" style="margin-left: 20px;"></i> Inscripci&oacute;n</h2>
        </div> --}}
        <div class="card-body" style="overflow: auto">
            <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
            {{-- <table class="table table-striped table-responsive-lg"> --}}
                <thead class="flip-content">
                    <tr>
                        <th>Nombre</th>
                        <th>tipo_nomina</th>
                        <th>universo</th>
                        <th>numero_empleado</th>
                        <th>id_unidad_administrativa</th>
                        <th>id_sector</th>
                        <th>sector</th>
                        <th>clave_dependencia</th>
                        <th>nivel_salarial</th>
                        <th>seccion_sindical</th>
                        <th>curp</th>
                        <th>hora_entrada</th>
                        <th>hora_salida</th>
                        <th>calle</th>
                        <th>numero</th>
                        <th>codigo_postal</th>
                        <th>colonia</th>
                        <th>alcaldia</th>
                        <th>created_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista_preins as $caci)
                    <tr>
                        <td>{{$caci['nombre']}} {{$caci['ape_paterno']}} {{$caci['ape_materno']}}</td>
                        <td>{{$caci['tipo_nomina']}}</td>
                        <td>{{$caci['universo']}}</td>
                        <td>{{$caci['numero_empleado']}}</td>
                        <td>{{$caci['id_unidad_administrativa']}}</td>
                        <td>{{$caci['id_sector']}}</td>
                        <td>{{$caci['sector']}}</td>
                        <td>{{$caci['clave_dependencia']}}</td>
                        <td>{{$caci['nivel_salarial']}}</td>
                        <td>{{$caci['seccion_sindical']}}</td>
                        <td>{{$caci['curp']}}</td>
                        <td>{{$caci['hora_entrada']}}</td>
                        <td>{{$caci['hora_salida']}}</td>
                        <td>{{$caci['calle']}}</td>
                        <td>{{$caci['numero']}}</td>
                        <td>{{$caci['codigo_postal']}}</td>
                        <td>{{$caci['colonia']}}</td>
                        <td>{{$caci['alcaldia']}}</td>
                        <td>{{$caci['created_at']}}</td>
                        <td>
                            <span class="float-right">
                                <button class="btn btn-md btn-outline-success"
                                onclick="" title="Actualizar EDUCAD"><i
                                class="fa fa-recycle"></i></button>
                            </span>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
        </div>
        {{--  <div>
            <span class="float-right btn-regresar">
                <a class="btn btn-lg btn-primary" href="{{url('/admin')}}"
        title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
        </span>
    </div> --}}
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