@extends('menu')
@section('title','Pre-inscripcion')
@section('content')

<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
<div class="container">
    <form id="regForm" action="{{route('guardar_preinscripcion')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 style="color: #054a41;">Preinscripción a los Centros de Atención y Cuidado Infantil</h1>

        <div class="col-lg-12">
            <label style="color:#00b140; "><b>Datos de la persona trabajadora</b></label>
            <div class="row">
                <div class="col-sm-6">
                    <p>Nombre(s)<input id="nombre" type="text" placeholder="Nombre del Padre/Madre o Tutor"
                            title="Nombre(s) del Padre/Madre o Tutor" oninput="this.className = ''"
                            name="nombre" value="" ></p>

                    <p>Apellido paterno<input id="ape_paterno" type="text" placeholder="Apellido paterno"
                            title="Apellido paterno" oninput="this.className = ''" name="ape_paterno"
                            value="" ></p>
                    <p>Apellido materno<input id="ape_materno" type="text" placeholder="Apellido materno"
                            title="Apellido materno" oninput="this.className = ''" name="ape_materno"
                            value="" ></p>

                    <p>Tipo de nómina<input id="tipo_nomina" placeholder="Tipo de nómina" title="Tipo de nómina"
                            oninput="this.className = ''" name="tipo_nomina" value="" ></p>

                    <p>Universo<input id="universo" placeholder="Universo" title="Universo"
                            oninput="this.className = ''" name="universo" value="" ></p>

                    <p>Número de empleado<input id="numero_empleado" placeholder="Número de empleado"
                            title="Número de empleado" oninput="this.className = ''" name="numero_empleado" value=""
                            ></p>
                    <p>Id UA<input id="id_unidad_administrativa" placeholder="Id UA" title="id_unidad_administrativa" oninput="this.className = ''"
                            name="id_unidad_administrativa" value="" ></p>

                    <p>Id Sector<input id="id_sector" placeholder="Id Sector" title="id_sector"
                            oninput="this.className = ''" name="id_sector" value="" ></p>
                    <p>Sector<input id="sector" placeholder="Sector" title="sector" oninput="this.className = ''"
                            name="sector" value="" ></p>

                    <p>Áreas de adscripción<input id="clave_dependencia" type="text"
                            placeholder="Clave de la dependencia" title="Clave de la dependencia"
                            oninput="this.className = ''" name="clave_dependencia" value="" ></p>

                    <p>Nivel salarial<input id="nivel_salarial" placeholder="Nivel salarial" title="Nivel salarial"
                            oninput="this.className = ''" name="nivel_salarial" value="" >
                    </p>

                    <p>Sección sindical<input id="seccion_sindical" placeholder="Sección sindical"
                            title="Sección sindical" oninput="this.className = ''" name="seccion_sindical" value=""
                            ></p>
                </div>

                <div class="col-sm-6">
                    <p>CURP<input id="curp" placeholder="CURP" title="curp" oninput="this.className = ''" name="curp">
                    </p>
                    <p>Horario laboral</p>
                    <input type="time" id="hora_entrada" name="hora_entrada">
                    <input type="time" id="hora_salida" name="hora_salida">

                    <h5 style=" color:#777777; text-align: center;"><label>Domicilio particular</label></h5>
                    <p>Calle<font color="red"> *</font><input id="calle" type="text" placeholder="Calle" title="Calle"
                            oninput="this.className = ''" name="calle"></p>
                    <p>Número <font color="red">*</font><input id="numero" placeholder="Número" title="Número"
                            oninput="this.className = ''" name="numero"></p>
                    <p>Código postal<font color="red"> *</font><input id="codigo_postal" placeholder="Código postal"
                            title="NCódigo postal" oninput="this.className = ''" name="codigo_postal" maxlength="5"></p>

                    {{--  <input id="tokenCodigoPostalId" oninput="this.className = ''" name="tokenCodigoPostalId"
                        value="SistemaDeRpueba4as4x4vdlsad" hidden>  --}}
                    <p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;"> Colonia <select
                            style="font-size: 15px;" name="colonia" id="colonia" required><option value="value1">Opcion 1</option></select>
                        <!---<p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Colonia<input id="colonia" type="text" placeholder="Colonia" title="Colonia" oninput="this.className = ''" name="colonia" ></p>-->
                        <p>Alcaldía/Municipio<input id="alcaldia" type="text" placeholder="Alcaldía" title="Alcaldía"
                                oninput="this.className = ''" name="alcaldia" ></p>
                        <!--<h4><input style="width: 10%;" type="checkbox" name="cb-terminosservicio" required> Acepto términos y condiciones</h4><br>-->
                </div>
            </div>
        </div>
        <button style="float:right" id="valida_curp" type="submit">Enviar</button>
    </form>
</div>











</div>




@endsection