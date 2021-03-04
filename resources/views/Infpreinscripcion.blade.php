@extends('menu')
@section('title','Pre-inscripcion')


@section('content')
<script src="{{ asset('js/consulta_webservice.js') }}" type="text/javascript"> </script>
<script src="{{ asset('js/add-upper-case.js') }}"></script>
<script src="{{ asset('js/inscripcion.js') }}" type="text/javascript"> </script> 
<link href="{{ asset('css/style.css')}}" rel="stylesheet" />


<body>
<div class="container">
    {{--  <form id="regForm" action="{{route('guardar_preinscripcion')}}" method="POST" enctype="multipart/form-data">  --}}
      <form id="regForm" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 style="color: #054a41;">Preinscripción a EDUCAD</h1>
        <?php
       // echo var_dump($data);       
        ?>
       

        <div class="col-lg-12">
            <label style="color:#00b140; "><b>Datos de la persona trabajadora</b></label>
            <div class="row">
                <div class="col-sm-6">
                    <p>Nombre(s):<input id="nombre" type="text" placeholder="Nombre del Padre/Madre o Tutor"
                            title="Nombre(s) del Padre/Madre o Tutor" oninput="this.className = ''"
                            name="nombre" value="" ></p>

                    <p>Primer Apellido:<input id="ape_paterno" type="text" placeholder="Apellido paterno"
                            title="Apellido paterno" oninput="this.className = ''" name="ape_paterno"
                            value="<?php  echo $data['user']['CH_paterno'];?>" readonly ></p>
                    <p>Segundo Apellido:<input id="ape_materno" type="text" placeholder="Apellido materno"
                            title="Apellido materno" oninput="this.className = ''" name="ape_materno"
                            value="<?php  echo $data['user']['CH_materno'];?>" readonly ></p>

                    <p>Id.Emp:<input id="id_empleado" type="text" placeholder="Id empleado"
                           title="Id empleado" oninput="this.className = ''" name="id_empleado" 
                           value="<?php  echo $data['user']['NumEmpleado'];?>" readonly ></p>

                    <p>Tipo de nómina<input id="tipo_nomina" placeholder="Tipo de nómina" title="Tipo de nómina"
                            oninput="this.className = ''" name="tipo_nomina" value="<?php  echo $data['user']['TipoNomina'];?>" readonly ></p>

                    <p>Universo nominal<input id="universo_nominal" placeholder="Universo nominal" title="Universo"
                            oninput="this.className = ''" name="universo_nominal" value="<?php  echo $data['user']['status'];?>" ></p>

                    <p>ID. UA<input id="id_unidad_administrativa" placeholder="Id UA" title="Id unidad administrativa" oninput="this.className = ''"
                            name="id_unidad_administrativa" value="<?php  echo $data['user']['NUM_PLAZA'];?>" ></p>

                     <p>UA:<input id="unidad_administrativa" placeholder="Unidad administrativa"
                            title="Unidad Administrativa" oninput="this.className = ''" name="unidad_administrativa" 
                            value="<?php echo $data['user']['CH_nombres'];?>" readonly></p>

                    <p>ID. Sector:<input id="id_sector" placeholder="Id Sector" title="id_sector"
                            oninput="this.className = ''" name="id_sector" value="<?php  echo $data['user']['NUM_PLAZA'];?>" ></p>
                    <p>Sector:<input id="sector" placeholder="Sector" title="sector" oninput="this.className = ''"
                            name="sector" value="<?php  echo $data['user']['N_SECT_PRES'];?>" readonly></p>

                    <p>Sector Pago:<input id="sector_pago" placeholder="Sector pago" title="sector_pago" oninput="this.className = ''"
                            name="sector_pago" value="<?php  echo $data['user']['N_SECT_PRES'];?>" readonly></p>

                    <p>Nivel salarial<input id="nivel_salarial" placeholder="Nivel salarial" title="Nivel salarial"
                            oninput="this.className = ''" name="nivel_salarial" value="<?php  echo $data['user']['NIVEL_SALARIAL'];?>" readonly>
                    </p>

                    <p>Sección sindical<input id="seccion_sindical" placeholder="Sección sindical"
                            title="Sección sindical" oninput="this.className = ''" name="seccion_sindical" value="<?php  echo $data['user']['SECCION_SINDICAL'];?>"readonly
                            ></p>
                </div>

                <div class="col-sm-6">
                <h4 style="color: #00b140;"><b>Domicilio Particular</b>  </h4>

                    <p>Calle<font color="red"> *</font><input id="calle" type="text" placeholder="Calle" title="Calle"
                                oninput="this.className = ''" name="calle"></p>
                    <p>Número ext. <font color="red">*</font><input id="numero_ext" placeholder="Número exterior" title="Número"
                                oninput="this.className = ''" name="numero_ext"></p>

                    <p>Número int. <font color="red">*</font><input id="numero_int" placeholder="Número interior" title="Número int."
                                oninput="this.className = ''" name="numero_int"></p>

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
                <p>País:<input id="pais" type="text" placeholder="País" title="País"
                            oninput="this.className = ''" name="pais"></p>
              
                <h4 style="color: #00b140;"><b>Datos Contacto</b>  </h4>

                <p>Correo electrónico:<input id="correo_electro" type="email" placeholder="Correo electrónico"
                    title="Correo Electrónico" oninput="this.className = ''" name="correo_electro"></p>

                <p>Teléfono domicilio a 10 dígitos:<input id="telefono_uno" type="tel" placeholder="Teléfono"
                    title="Teléfono o celular" oninput="this.className = ''" name="telefono_uno" maxlength="10"
                    pattern="[0-9]{10}"></p>
                <p>Teléfono celular a 10 dígitos:<input id="telefono_dos" type="tel" placeholder="Teléfono celular" title="Teléfono 2"
                    oninput="this.className = ''" name="telefono_dos" maxlength="10" pattern="[0-9]{10}"></p>
                <p>Teléfono oficina a 10 dígitos:<input id="telefono_tres" type="tel" placeholder="Teléfono oficina" title="Teléfono 3"
                    oninput="this.className = ''" name="telefono_tres" maxlength="10" pattern="[0-9]{10}"></p>
                <p>Ext.:<input id="extension" type="text" placeholder="Extensión" title="Ext"
                    oninput="this.className = ''" name="extension"></p>
                    
                    <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Archivo de prueba.</h5>
                    <input type="file" id="filename_prueba" name="filename_prueba" accept="application/msword, application/pdf" required>
                       
                </div>
            </div>
        </div>
        <button style="margin-top: 30px; float:right" id="valida_curp" type="button" onclick="preinscripcion()">Enviar</button>
    </form>
</div>


</div>
      
</body>
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  var act_supera_tamanio_permitido = false;
var nac_supera_tamanio_permitido = false;
var vac_supera_tamanio_permitido = false;
var curp_supera_tamanio_permitido = false;
var disc_supera_tamanio_permitido = false;
var trab_supera_tamanio_permitido = false;
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

$(document).ready(function () {
  $("#filename_act").on('change', function () {
    console.log(act_supera_tamanio_permitido);
    const tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_act').prop("files")[0];
    if(dato_archivo_act.size > tamanioArchivoPermitido){
      act_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        //alert("si hiciste caso se habilita boton");
        act_supera_tamanio_permitido = false;
        console.log(act_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_nac").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_nac').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    nac_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        //alert("si hiciste caso se habilita boton");
        nac_supera_tamanio_permitido = false;
        console.log(nac_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_vacu").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_vacu').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    vac_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        vac_supera_tamanio_permitido = false;
        console.log(vac_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_com").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_com').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    curp_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
      curp_supera_tamanio_permitido = false;
      console.log(curp_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_disc").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_disc').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    disc_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        disc_supera_tamanio_permitido = false;
        console.log(disc_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_trab").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_trab').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    trab_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        trab_supera_tamanio_permitido = false;
        $("#nextBtn").attr("disabled", false);
    }
});
});

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  if(currentTab === 1){
    $(document).ready(function() {
      $("#nextBtn").attr("disabled", true);
    });
    //alert("Hola");
  }
  if(currentTab === 2){
    $(document).ready(function() {
      $("#nextBtn").attr("disabled", true);
    });
  }
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    if(act_supera_tamanio_permitido === false && nac_supera_tamanio_permitido === false && vac_supera_tamanio_permitido === false && 
    curp_supera_tamanio_permitido === false && disc_supera_tamanio_permitido === false && trab_supera_tamanio_permitido === false){

      if (!$('#terminos').is(':checked')) {
        $("#nextBtn").attr("disabled", true);
        console.log($('#terminos').value);
        Swal.fire({
          title: 'Acepte los terminos y condiciones',
          text: 'Por favor seleccione la casilla para terminar el proceso de Preinscripción',
          icon: 'warning',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ok',
          allowOutsideClick: false
        });   
        console.log("este es la pestañña " + currentTab-1);
        var x = document.getElementsByClassName("tab");
        x[n-1].style.display = "block";
        currentTab = currentTab - 1;
      } else {
        //solo cuando le dde el checked se podra inscribir en la bd
        $("#nextBtn").attr("disabled", false);
        console.log($('#terminos').value);
        var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
    form_data.append("nombre_tutor", $("#nombre_tutor").val());
    form_data.append("ap_paterno_t", $("#ap_paterno_t").val());
    form_data.append("ap_materno_t", $("#ap_materno_t").val());
    form_data.append("calle", $("#calle").val());
    form_data.append("numero_domicilio", $("#numero_domicilio").val());
    form_data.append("colonia", $("#colonia").val());
    form_data.append("alcaldia", $("#alcaldia").val());
    form_data.append("codigo_postal", $("#codigo_postal").val());

    /*----------------------*/
    form_data.append("nombre", $("#nombre").val());
    form_data.append("ape_paterno", $("#ape_paterno").val());
    form_data.append("ape_materno", $("#ape_materno").val());
    form_data.append("id_empleado", $("#id_empleado").val());
    form_data.append("universo_nominal", $("#universo_nominal").val());
    form_data.append("id_unidad_administrativa", $("#id_unidad_administrativa").val());
    form_data.append("unidad_administrativa", $("#unidad_administrativa").val());
    form_data.append("id_sector", $("#id_sector").val());
    form_data.append("sector", $("#sector").val());
    form_data.append("sector_pago", $("#sector_pago").val());
    form_data.append("calle", $("#calle").val());
    form_data.append("numero_ext", $("#numero_ext").val());
    form_data.append("numero_int", $("#numero_int").val());
    form_data.append("codigo_postal", $("#codigo_postal").val());
    form_data.append("colonia", $("#colonia").val());
    form_data.append("alcaldia", $("#alcaldia").val());
    form_data.append("estado", $("#estado").val());
    form_data.append("pais", $("#pais").val());
    form_data.append("correo_electro", $("#correo_electro").val());
    form_data.append("telefono_tres", $("#telefono_tres").val());
    form_data.append("extension", $("#extension").val());
    
    
    form_data.append("tipo_nomina", $("#tipo_nomina").val());
    form_data.append("num_empleado", $("#num_empleado").val());
    form_data.append("num_plaza", $("#num_plaza").val());
    form_data.append("clave_dependencia", $("#clave_dependencia").val());
    form_data.append("nivel_salarial", $("#nivel_salarial").val());
    form_data.append("seccion_sindical", $("#seccion_sindical").val());
    form_data.append("horario_laboral_ent", $("#horario_laboral_ent").val());
    form_data.append("horario_laboral_sal", $("#horario_laboral_sal").val());
    form_data.append("caci", $("#caci").val());
    form_data.append("email", $("#email").val());
    form_data.append("telefono_uno", $("#telefono_uno").val());
    form_data.append("telefono_dos", $("#telefono_dos").val());
    form_data.append("nombre_menor", $("#nombre_menor_1").val());
    form_data.append("ap_paterno", $("#apellido_paterno_1").val());
    form_data.append("ap_materno", $("#apellido_materno_1").val());
    form_data.append("curp", $("#curp_num").val());
    form_data.append("fecha_nacimiento", $("#birthday").val());
    form_data.append("edad_menor_ingreso", $("#Edad_menor").val());
    form_data.append("terminos", $("#terminos").val());

    var dato_archivo_act = $('#filename_act').prop("files")[0];
    var dato_archivo_nac = $('#filename_nac').prop("files")[0];
    var dato_archivo_vacu = $('#filename_vacu').prop("files")[0];
    var dato_archivo_com = $('#filename_com').prop("files")[0];
    var dato_archivo_disc = $('#filename_disc').prop("files")[0];
    var dato_archivo_trab = $('#filename_trab').prop("files")[0];
    
    if (dato_archivo_disc !== undefined) {
        form_data.append("filename_disc", dato_archivo_disc);
    }
    if (dato_archivo_trab !== undefined) {
        form_data.append("filename_trab", dato_archivo_trab);
    }
    form_data.append("filename_nac", dato_archivo_nac);
    form_data.append("filename_act", dato_archivo_act);
    form_data.append("filename_vacu", dato_archivo_vacu);
    form_data.append("filename_com", dato_archivo_com);

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'guardar_reinscripcion_bd',
        success: function (data) {
            console.log(data);
            if (data.ok) {
                if (data.Exist) {
                    Swal.fire({
                        icon: 'warning',
                        title: data.result,
                        showConfirmButton: false,
                        timer: 10000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        }
                    });
                    return;
                }
                Swal.fire({
                    icon: 'success',
                    title: 'Su solicitud se ha registrado en el sistema, en breve recibirá un correo electrónico referente al registro de su solicitud',
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#new_reminder").modal("hide");
                        location.href = url + 'inicio';
                        //document.getElementById("regForm").submit();
                    }
                });
            } else {
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: false,
                        timer: 15000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        }
                    });
                    return;
                }
                if (data.err_valid_docs) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Documentos, Validaciones!',
                        text: data.result,
                        showConfirmButton: false,
                        timer: 10000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        }
                    });
                    return;
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error de Sistema!',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'reinscripcion';
                    }
                });
            }
            //alert("Los Datos se Consultaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
    console.log("este es la pestañña " + currentTab+1);
    //showTab(currentTab+1);
    var x = document.getElementsByClassName("tab");
      x[n+1].style.display = "block";
      currentTab = currentTab + 1;
      return false;
      }

    
    }else{
      var x = document.getElementsByClassName("tab");
      x[n-1].style.display = "block";
      currentTab = currentTab - 1;
      Swal.fire({
        title: 'Verifica, uno o varios de tus documentos son mayores a 2Mb',
        text: 'Por favor seleccione archivos que no excedan el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      }); 
    }
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