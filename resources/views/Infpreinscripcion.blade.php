@extends('menu')
@section('title','Pre-inscripcion')


@section('content')
<script src="{{ asset('js/consulta_webservice.js') }}" type="text/javascript"> </script>
<script src="{{ asset('js/add-upper-case.js') }}"></script>
<script src="{{ asset('js/inscripcion.js') }}" type="text/javascript"> </script> 
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="container">
    <form id="regForm" action="{{route('guardar_preinscripcion')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 style="color: #054a41;">Preinscripción a EDUCAD</h1>
        <?php
       // echo var_dump($data);       
        ?>
       

        <div class="col-lg-12">
            <label style="color:#00b140; "><b>Datos de la persona trabajadora</b></label>
            <div class="row">
                <div class="col-sm-6">
                    <p>Nombre(s)<input id="nombre" type="text" placeholder="Nombre del Padre/Madre o Tutor"
                            title="Nombre(s) del Padre/Madre o Tutor" oninput="this.className = ''"
                            name="nombre" value="" ></p>

                    <p>Apellido paterno<input id="ape_paterno" type="text" placeholder="Apellido paterno"
                            title="Apellido paterno" oninput="this.className = ''" name="ape_paterno"
                            value="<?php  echo $data['user']['CH_paterno'];?>" readonly ></p>
                    <p>Apellido materno<input id="ape_materno" type="text" placeholder="Apellido materno"
                            title="Apellido materno" oninput="this.className = ''" name="ape_materno"
                            value="<?php  echo $data['user']['CH_materno'];?>" readonly ></p>

                    <p>Tipo de nómina<input id="tipo_nomina" placeholder="Tipo de nómina" title="Tipo de nómina"
                            oninput="this.className = ''" name="tipo_nomina" value="<?php  echo $data['user']['TipoNomina'];?>" readonly ></p>

                    <p>Universo<input id="universo" placeholder="Universo" title="Universo"
                            oninput="this.className = ''" name="universo" value="<?php  //echo $data['user'][''];?>" ></p>

                    <p>Número de empleado<input id="numero_empleado" placeholder="Número de empleado"
                            title="Número de empleado" oninput="this.className = ''" name="numero_empleado" value="<?php  echo $data['user']['NumEmpleado'];?>" readonly
                            ></p>
                    <p>Id UA<input id="id_unidad_administrativa" placeholder="Id UA" title="id_unidad_administrativa" oninput="this.className = ''"
                            name="id_unidad_administrativa" value="<?php // echo $data['user'][''];?>" ></p>

                    <p>Id Sector<input id="id_sector" placeholder="Id Sector" title="id_sector"
                            oninput="this.className = ''" name="id_sector" value="<?php // echo $data['user'][''];?>" ></p>
                    <p>Sector<input id="sector" placeholder="Sector" title="sector" oninput="this.className = ''"
                            name="sector" value="<?php  echo $data['user']['N_SECT_PRES'];?>" readonly></p>

                    <p>Áreas de adscripción<input id="clave_dependencia" type="text"
                            placeholder="Clave de la dependencia" title="Clave de la dependencia"
                            oninput="this.className = ''" name="clave_dependencia" value="<?php // echo $data['user'][''];?>" ></p>

                    <p>Nivel salarial<input id="nivel_salarial" placeholder="Nivel salarial" title="Nivel salarial"
                            oninput="this.className = ''" name="nivel_salarial" value="<?php  echo $data['user']['NIVEL_SALARIAL'];?>" readonly>
                    </p>

                    <p>Sección sindical<input id="seccion_sindical" placeholder="Sección sindical"
                            title="Sección sindical" oninput="this.className = ''" name="seccion_sindical" value="<?php  echo $data['user']['SECCION_SINDICAL'];?>"readonly
                            ></p>
                </div>

                <div class="col-sm-6">
                    <p>CURP<input id="curp" placeholder="CURP" title="curp" oninput="this.className = ''" name="curp" value="<?php  //echo $data['user']['CH_paterno'];?>">
                    </p>
                    <p>Horario laboral</p>
                    <input type="time" id="hora_entrada" name="hora_entrada">
                    <input type="time" id="hora_salida" name="hora_salida">

                    <h5 style=" color:#777777; text-align: center;"><label>Domicilio particular</label></h5>
                    <p>Calle<font color="red"> *</font><input id="calle" type="text" placeholder="Calle" title="Calle"
                            oninput="this.className = ''" name="calle"></p>
                    <p>Número <font color="red">*</font><input id="numero" placeholder="Número" title="Número"
                            oninput="this.className = ''" name="numero"></p>
                <p>Código postal<input id="codigo_postal" placeholder="Código postal" title="NCódigo postal"
                  oninput="this.className = ''" name="codigo_postal" maxlength="5"></p>
              <input id="tokenCodigoPostalId" oninput="this.className = ''" name="tokenCodigoPostalId"
                value="SistemaDeRpueba4as4x4vdlsad" hidden>
              <p> Colonia <select style="font-size: 15px;" name="colonia" id="colonia" required></select>
                <!---<p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Colonia<input id="colonia" type="text" placeholder="Colonia" title="Colonia" oninput="this.className = ''" name="colonia" readonly></p>-->
                <p>Alcaldía/Municipio<input id="alcaldia" type="text" placeholder="Alcaldía" title="Alcaldía"
                    oninput="this.className = ''" name="alcaldia" readonly></p>
                       
                </div>
            </div>
        </div>
        <button style="float:right" id="valida_curp" type="submit">Enviar</button>
    </form>
</div>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@endsection