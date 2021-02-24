@extends('menu')
@section('title','Pre-inscripcion')
@section('content')

<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
                <div class="container">
                <form id="regForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 style="color: #054a41;">Preinscripción a los Centros de Atención y Cuidado Infantil</h1>
            
            <div class="col-lg-12">
                        <label style="color:#00b140; "><b>Datos de la persona trabajadora</b></label>
                        <div class="row">
                            <div class="col-sm-6">
                            <p>Nombre(s)<input id="nombre_tutor_madres" type="text" placeholder="Nombre del Padre/Madre o Tutor"
                  title="Nombre(s) del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre_tutor_madres"
                  value="" readonly></p>

              <p>Apellido paterno<input id="apellido_paterno_tutor" type="text" placeholder="Apellido paterno"
                  title="Apellido paterno" oninput="this.className = ''" name="apellido_paterno_tutor"
                  value="" readonly></p>
              <p>Apellido materno<input id="apellido_materno_tutor" type="text" placeholder="Apellido materno"
                  title="Apellido materno" oninput="this.className = ''" name="apellido_materno_tutor"
                  value="" readonly></p>
                  
               <p>Tipo de nómina<input id="tipo_nomina_1" placeholder="Tipo de nómina" title="Tipo de nómina"
                  oninput="this.className = ''" name="tipo_nomina_1" value="" readonly></p>

              <p>Universo<input id="universo" placeholder="Universo" title="Universo"
                  oninput="this.className = ''" name="universo" value="" readonly></p>

              <p>Número de empleado<input id="num_empleado_1" placeholder="Número de empleado"
                  title="Número de empleado" oninput="this.className = ''" name="num_empleado_1"
                  value="" readonly></p>
              <p>Id UA<input id="id_ua" placeholder="Id UA" title="id_ua"
                  oninput="this.className = ''" name="id_ua" value="" readonly></p>

              <p>Id Sector<input id="id_sector" placeholder="Id Sector" title="id_sector"
                  oninput="this.className = ''" name="id_sector" value="" readonly></p>
              <p>Sector<input id="sector" placeholder="Sector" title="sector"
                  oninput="this.className = ''" name="sector" value="" readonly></p>

              <p>Áreas de adscripción<input id="clave_dependencia_1" type="text" placeholder="Clave de la dependencia"
                  title="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia_1"
                  value="" readonly></p>

              <p>Nivel salarial<input id="nivel_salarial_1" placeholder="Nivel salarial" title="Nivel salarial"
                  oninput="this.className = ''" name="nivel_salarial_1" value="" readonly>
              </p>

              <p>Sección sindical<input id="seccion_sindical_1" placeholder="Sección sindical" title="Sección sindical"
                  oninput="this.className = ''" name="seccion_sindical_1" value=""
                  readonly></p>
            </div>

            <div class="col-sm-6">
            <p>CURP<input id="curp" placeholder="CURP" title="curp" oninput="this.className = ''"
                  name="curp"></p>
              <p>Horario laboral</p>
              <input type="time" id="horario_laboral_ent" name="horario_laboral_ent">
              <input type="time" id="horario_laboral_sal" name="horario_laboral_sal">

              <h5 style=" color:#777777; text-align: center;"><label>Domicilio particular</label></h5>
              <p>Calle<font color="red"> *</font><input id="calle" type="text" placeholder="Calle" title="Calle" oninput="this.className = ''"
                  name="calle"></p>
              <p>Número <font color="red">*</font><input id="numero_domicilio" placeholder="Número" title="Número" oninput="this.className = ''"
                  name="numero_domicilio"></p>
              <p>Código postal<font color="red"> *</font><input id="codigo_postal" placeholder="Código postal" title="NCódigo postal"
                  oninput="this.className = ''" name="codigo_postal" maxlength="5"></p>

              <input id="tokenCodigoPostalId" oninput="this.className = ''" name="tokenCodigoPostalId"
                value="SistemaDeRpueba4as4x4vdlsad" hidden>
              <p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;"> Colonia <select
                  style="font-size: 15px;" name="colonia" id="colonia" required></select>
                <!---<p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Colonia<input id="colonia" type="text" placeholder="Colonia" title="Colonia" oninput="this.className = ''" name="colonia" readonly></p>-->
                <p>Alcaldía/Municipio<input id="alcaldia" type="text" placeholder="Alcaldía" title="Alcaldía"
                    oninput="this.className = ''" name="alcaldia" readonly></p>
                <!--<h4><input style="width: 10%;" type="checkbox" name="cb-terminosservicio" required> Acepto términos y condiciones</h4><br>-->
            </div>
          </div>
        </div>
        <button style="float:right" id="valida_curp" type="button" >Continuar</button>
      </div>
      

      








                </div>




@endsection