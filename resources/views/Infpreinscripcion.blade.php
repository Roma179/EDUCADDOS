@extends('menu')
@section('title','Pre-inscripcion')


@section('content')
<script src="{{ asset('js/consulta_webservice.js') }}" type="text/javascript"> </script>
<script src="{{ asset('js/add-upper-case.js') }}"></script>
<script src="{{ asset('js/inscripcion.js') }}" type="text/javascript"> </script>
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />


<body>
  <div class="container">
    {{--  <form id="regForm" action="{{route('guardar_preinscripcion')}}" method="POST" enctype="multipart/form-data">
    --}}
    <form id="regForm" method="POST" enctype="multipart/form-data">
      @csrf
      <h1 style="color: #054a41;">Preinscripción a EDUCAD</h1>
      <?php
       // echo var_dump($data);       
        ?>

      <div class="tab">
        <div class="col-lg-12">
          <label style="color:#00b140; "><b>Datos de la persona trabajadora</b></label>
          <div class="row">
            <div class="col-sm-6">
              <p>Nombre(s):<input id="nombre" type="text" placeholder="Nombre del Padre/Madre o Tutor"
                  title="Nombre(s) del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre" value=""></p>

              <p>Primer Apellido:<input id="ape_paterno" type="text" placeholder="Apellido paterno"
                  title="Apellido paterno" oninput="this.className = ''" name="ape_paterno"
                  value="<?php  echo $data['user']['CH_paterno'];?>" readonly></p>
              <p>Segundo Apellido:<input id="ape_materno" type="text" placeholder="Apellido materno"
                  title="Apellido materno" oninput="this.className = ''" name="ape_materno"
                  value="<?php  echo $data['user']['CH_materno'];?>" readonly></p>

              <p>Id.Emp:<input id="id_empleado" type="text" placeholder="Id empleado" title="Id empleado"
                  oninput="this.className = ''" name="id_empleado" value="<?php  echo $data['user']['NumEmpleado'];?>"
                  readonly></p>

              <p>Tipo de nómina<input id="tipo_nomina" placeholder="Tipo de nómina" title="Tipo de nómina"
                  oninput="this.className = ''" name="tipo_nomina" value="<?php  echo $data['user']['TipoNomina'];?>"
                  readonly></p>

              <p>Universo nominal<input id="universo_nominal" placeholder="Universo nominal" title="Universo"
                  oninput="this.className = ''" name="universo_nominal" value="<?php  echo $data['user']['status'];?>">
              </p>

              <p>ID. UA<input id="id_unidad_administrativa" placeholder="Id UA" title="Id unidad administrativa"
                  oninput="this.className = ''" name="id_unidad_administrativa"
                  value="<?php  echo $data['user']['NUM_PLAZA'];?>"></p>

              <p>UA:<input id="unidad_administrativa" placeholder="Unidad administrativa" title="Unidad Administrativa"
                  oninput="this.className = ''" name="unidad_administrativa"
                  value="<?php echo $data['user']['CH_nombres'];?>" readonly></p>

              <p>ID. Sector:<input id="id_sector" placeholder="Id Sector" title="id_sector"
                  oninput="this.className = ''" name="id_sector" value="<?php  echo $data['user']['NUM_PLAZA'];?>"></p>
              <p>Sector:<input id="sector" placeholder="Sector" title="sector" oninput="this.className = ''"
                  name="sector" value="<?php  echo $data['user']['N_SECT_PRES'];?>" readonly></p>

              <p>Sector Pago:<input id="sector_pago" placeholder="Sector pago" title="sector_pago"
                  oninput="this.className = ''" name="sector_pago" value="<?php  echo $data['user']['N_SECT_PRES'];?>"
                  readonly></p>

              <p>Nivel salarial<input id="nivel_salarial" placeholder="Nivel salarial" title="Nivel salarial"
                  oninput="this.className = ''" name="nivel_salarial"
                  value="<?php  echo $data['user']['NIVEL_SALARIAL'];?>" readonly>
              </p>

              <p>Sección sindical<input id="seccion_sindical" placeholder="Sección sindical" title="Sección sindical"
                  oninput="this.className = ''" name="seccion_sindical"
                  value="<?php  echo $data['user']['SECCION_SINDICAL'];?>" readonly></p>
            </div>

            <div class="col-sm-6">
              <h4 style="color: #00b140;"><b>Domicilio Particular</b> </h4>

              <p>Calle<font color="red"> *</font><input id="calle" type="text" placeholder="Calle" title="Calle"
                  oninput="this.className = ''" name="calle"></p>
              <p>Número ext. <font color="red">*</font><input id="numero_ext" placeholder="Número exterior"
                  title="Número" oninput="this.className = ''" name="numero_ext"></p>

              <p>Número int. <font color="red">*</font><input id="numero_int" placeholder="Número interior"
                  title="Número int." oninput="this.className = ''" name="numero_int"></p>

              <p>Código postal<input id="codigo_postal" placeholder="Código postal" title="NCódigo postal"
                  oninput="this.className = ''" name="codigo_postal" maxlength="5"></p>
              <input id="tokenCodigoPostalId" oninput="this.className = ''" name="tokenCodigoPostalId"
                value="SistemaDeRpueba4as4x4vdlsad" hidden>
              <p> Colonia <select style="font-size: 15px;" name="colonia" id="colonia" required></select>
                <!---<p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Colonia<input id="colonia" type="text" placeholder="Colonia" title="Colonia" oninput="this.className = ''" name="colonia" readonly></p>-->
                <p>Alcaldía/Municipio<input id="alcaldia" type="text" placeholder="Alcaldía" title="Alcaldía"
                    oninput="this.className = ''" name="alcaldia" readonly></p>
                <p>Estado:<input id="estado" type="text" placeholder="Estado" title="Estado"
                    oninput="this.className = ''" name="estado"></p>
                <p>País:<input id="pais" type="text" placeholder="País" title="País" oninput="this.className = ''"
                    name="pais"></p>

                <h4 style="color: #00b140;"><b>Datos Contacto</b> </h4>

                <p>Correo electrónico:<input id="correo_electro" type="email" placeholder="Correo electrónico"
                    title="Correo Electrónico" oninput="this.className = ''" name="correo_electro"></p>

                <p>Teléfono domicilio a 10 dígitos:<input id="telefono_uno" type="tel" placeholder="Teléfono"
                    title="Teléfono o celular" oninput="this.className = ''" name="telefono_uno" maxlength="10"
                    pattern="[0-9]{10}"></p>
                <p>Teléfono celular a 10 dígitos:<input id="telefono_dos" type="tel" placeholder="Teléfono celular"
                    title="Teléfono 2" oninput="this.className = ''" name="telefono_dos" maxlength="10"
                    pattern="[0-9]{10}"></p>
                <p>Teléfono oficina a 10 dígitos:<input id="telefono_tres" type="tel" placeholder="Teléfono oficina"
                    title="Teléfono 3" oninput="this.className = ''" name="telefono_tres" maxlength="10"
                    pattern="[0-9]{10}"></p>
                <p>Ext.:<input id="extension" type="text" placeholder="Extensión" title="Ext"
                    oninput="this.className = ''" name="extension"></p>

                {{--  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Archivo de prueba.</h5>
                <input type="file" id="filename_prueba" name="filename_prueba"
                  accept="application/msword, application/pdf" required>  --}}

            </div>
          </div>
        </div>
      </div>
      <div class="tab">
        <br>
        <div class="container mt-5">
          <center>
            <h1>Pre-registro</h1>
          </center>

          <p><b>Favor de adjuntar los siguientes documentos:</b></p>
          <ul>
            <li>Acta de Nacimiento</li>
            <li>Clave Única de Registro de Población (CURP) (lo puedes descargar desde la página <a
                href="https://www.gob.mx/curp" target="_blank">
                <font color="#000000">https://www.gob.mx/curp</font>
              </a></li>
            <li>Comprobante de Domicilio (no mayor a tres meses),</li>
            <li>Identificación Oficial vigente (INE) ambos lados</li>
            <li>Último recibo de nómina (a la quincena vigente),</li>
          </ul>

          <div class="mt-2">


            <div class="card-primary" style="background-color:#F5FCFE;">
              <div class="row">
                <div class="col">
                  <h6>Acta de Nacimiento</h6>
                  <input type="file" id="filename_acta_nacimiento" name="filename_acta_nacimiento"
                    accept="application/msword, application/pdf">
                </div>
                <div class="col">
                  <h6>Clave Única de Registro de Población (CURP)</h6>
                  <input type="file" id="filename_curp" name="filename_curp"
                    accept="application/msword, application/pdf">
                </div>
              </div><br>
              <div class="row mt-2">
                <div class="col">
                  <h6>Comprobante de Domicilio</h6>
                  <input type="file" id="filename_comprobante_domicilio" name="filename_comprobante_domicilio"
                    accept="application/msword, application/pdf">
                </div>
                <div class="col">
                  <h6>Identificación Oficial</h6>
                  <input type="file" id="filename_ine" name="filename_ine" accept="application/msword, application/pdf">
                </div>
              </div><br>
              <div class="row mt-2">
                <div class="col">
                  <h6>Último recibo de nómina:</h6>
                  <input type="file" id="filename_recibo_nomina" name="filename_recibo_nomina"
                    accept="application/msword, application/pdf">
                </div>

              </div>
            </div>
            <div class="mt-4">

              <div class="card-primary" style="background-color:#F5FCFE;">
                <div class="row">
                  <div class="col">
                    <h4>Seleccione el nivel de estudios al que desea inscribirse:</h4>
                    <select id="select" name="select" class="form-control">
                      <option value="value1">Elige</option>
                      <option value='bachillerato'>01_Bachillerato</option>
                      <option value='licenciatura_ingenieria'>02_Licenciatura o ingeniería</option>
                      <option value='maestria'>03_Maestría</option>
                    </select>

                    <div id="bachillerato" style="display:none;">

                      <h5>Certificado total de estudios del grado Secundaria (ambos lados)</h5>
                      <input type="file" id="filename_certificado_secundaria" name="filename_certificado_secundaria"
                        accept="application/msword, application/pdf">
                    </div>

                    <div id="carreras_licenciatura_ingenieria" style="display:none;">
                      <h5>Seleccione el plan de estudios que desea cursar</h5>
                      <select id="select" name="select" class="form-control">
                        <option value="value1">Elige</option>
                        <option id="contador_public" name="contador_public">Contador Público</option>
                        <option id="adm_empresa" name="adm_empresa">Administración de Empresas</option>
                        <option id="derecho" name="derecho">Derecho</option>
                        <option id="infor_adm" name="infor_adm">Informática Administrativa</option>
                        <option id="rh" name="rh">Recursos Humanos</option>
                        <option id="ciencias_educ" name="ciencias_educ">Ciencias de la Educación</option>
                        <option id="mercadotecnia" name="mercadotecnia">Mercadotecnia</option>
                        <option id="adm_financiera" name="adm_financiera">Administración Financiera</option>
                        <option id="derecho_economia" name="derecho_economia">Derecho con Acentuación en
                          Economía</option>
                        <option id="derech_corporativo" name="derech_corporativo">Derecho Corporativo</option>
                        <option id="derech_finanzas" name="derech_finanzas">Derecho y Finanzas</option>
                        <option id="gestion_turistica" name="gestion_turistica">Gestión Turística</option>
                        <option id="merc_turistica" name="merc_turistica">Mercadotecnia Turística</option>
                        <option id="derech_lab" name="derech_lab">Derecho Laboral</option>
                        <option disabled><b>Ingeniería en:</b></option>
                        <option id="tec_comp" name="tec_comp">Tecnologías Computacionales</option>
                        <option id="indus_sistemas" name="indus_sistemas">Industrial y de Sistemas</option>
                        <option id="logistica" name="logistica">Logística</option>
                        <option id="gestion_empresarial" name="gestion_empresarial">Gestión Empresarial</option>
                      </select>
                      <h5>Certificado total de estudios de Bachillerato o equivalente.</h5>
                      <input type="file" id="filename_certificado_bachi" name="filename_certificado_bachi"
                        accept="application/msword, application/pdf">
                    </div>

                    <div id="maestria" style="display:none;">
                      <h5>Seleccione el plan de estudios que desea cursar</h5>
                      <select id="select" name="select" class="form-control">
                        <option value="value1">Elige</option>
                        <option id="administracion" name="administracion">Administración</option>
                        <option id="adm_ch" name="adm_ch">Administración del Capital Humano</option>
                        <option id="adm_finanzas" name="adm_finanzas">Administración y Finanzas</option>
                        <option id="adm_mercadotecnia" name="adm_mercadotecnia">Administración y Mercadotecnia
                        </option>
                        <option id="edu_tecnologia" name="edu_tecnologia">Educación con Acentuación en
                          Tecnología Educativa</option>
                        <option id="maestria_derech" name="maestria_derech">Maestría en Derecho Laboral</option>
                      </select>

                      <h5>Título Profesional</br>
                        Cédula Profesional de nivel superior</h5>
                      <input type="file" id="filename_certificado_maestria" name="filename_certificado_maestria"
                        accept="application/msword, application/pdf">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" style="margin-top: 30px;" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
        </div>
      </div>
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
      </div>
      {{--  <button style="margin-top: 30px; float:right" id="valida_curp" type="button" onclick="preinscripcion()">Enviar</button>    --}}
    </form>
  </div>


  </div>

</body>
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="url('assets/vendors/general/sweetalert2/dist/sweetalert2.all.min.js')"></script>
<script>
    $(document).ready(function(){
    $('#select').on('change',function(){
    var selectValor = ''+$(this).val();
    //alert (selectValor);

   if(selectValor == 'bachillerato'){
       // alert ('entrando al if');
        $("#bachillerato").css('display', 'block');
        $("#carreras_licenciatura_ingenieria").css('display', 'none')
        $("#maestria").css('display', 'none');
    }
    if(selectValor == 'licenciatura_ingenieria'){
        $("#bachillerato").css('display', 'none');
        $("#carreras_licenciatura_ingenieria").css('display', 'block');
        $("#maestria").css('display', 'none');
    }
    if(selectValor == 'maestria'){
        $("#bachillerato").css('display', 'none');
        $("#carreras_licenciatura_ingenieria").css('display', 'none');
        $("#maestria").css('display', 'block');
    }
       
    }); 
    
});
</script>
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    //document.getElementById("prevBtn").style.display = "none";
	Swal.fire({
  title: '<h4>Atención</u></h4>',
  html:
    '<p align="justify">Los Datos Personales que se solicitan en el presente formulario se encuentran protegidos por la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados de la Ciudad de México, por lo que su difusión se encuentra tutelada en sus artículos 3 fracciones IX, XXVIII, XXIX, XXXIV, XXXVI, 9, 16, 25, 26, 37, 41, 46, 49, 50, de dicha Ley y demás relativos y aplicables; debiendo sujetarse en su caso, a las disposiciones relativas a la creación, modificación o supresión de datos personales previstos. Asimismo, deberá estarse a lo señalado en los numerales 1, 3, 12, 18, 19, 20, 21, 23, 24, 29, 35 y demás aplicables de los Lineamientos para la Protección de Datos Personales en el Distrito Federal. En el uso de las tecnologías de la información y comunicaciones de la Ciudad de México, deberá observarse puntualmente lo dispuesto por la Ley de Gobierno Electrónico de la Ciudad de México, Ley de Operación e Innovación Digital para la Ciudad de México, Criterios para la Dictaminación de Adquisiciones y Uso de Recursos Públicos Relativos a las Tecnologías de la Información y las Comunicaciones de la Ciudad de México y demás relativas y aplicables.</p> ' +
    '<a target="_blank" href="{{asset('img/PDF/aviso_simplificado_sitio_caci.pdf')}}"><h5 style="color: #00b140;">Ver aviso de privacidad</h5></a> ',
  showCloseButton: true,
//  showCancelButton: true,
})  
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {

    document.getElementById("nextBtn").innerHTML = "Enviar";
  } 
  else {
    document.getElementById("nextBtn").innerHTML = "Continuar";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  //if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  console.log("estas en " + currentTab)
  if(currentTab === 1){
    console.log("estas en tab 1")
  }
  if(currentTab === 2){
    console.log("estas en tab 2")
  }
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    console.log("Entra el ultimo");
    preinscripcion();
  }
  showTab(currentTab);
}
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "" && y[i].name != 'filename_disc' && y[i].name != 'filename_trab') {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script>
  $(document).ready(function() {

  if ($(window).width() > 786) {
    $('.alert').hide().delay(750).slideDown(400);
  };
  $('.close_btn').click(function() {
    $('.close_btn').fadeOut(200);
    $('.alert').slideUp(400);
  });

});
</script>

{{--  <script>
  $(document).ready(function() {
    $( "#rfc" ).on('change',function() {
      $("#enlace_ws").get(0).click();
    });
  });
</script>  --}}


@endsection