@extends('menu')
@section('title','Etapa 3: Inscripción')
@section('scripts')
<script src="{{URL::asset('js/calendar.js')}}" type="text/javascript"> </script>
@endsection
@section('content')
<style>
  p {
    text-align: justify;
  }

  button {
    background-color: #00b140;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family: Arial;
  }

  #calendar {
    max-width: 1100px;
    max-height: 400px;
    margin: 40px auto;
    padding: 0 10px;
  }
</style>
<div class="container mt-5">
  <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Inscripción</h1>
  @if(Session::has('mensaje'))
  <div style="font-size: 2rem;" class="alert {{ Session::get('alert-class', 'alert-success') }}">
    <span>{{ Session::get('mensaje')}}</span>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button><br>
    <span> Todas las citas se llevarán a cabo en el Centro de Enlace ubicado en Fray Servando Teresa de Mier #77. Col.
      Obrera. Ciudad de México. Planta Baja.</span>
  </div>
  @elseif (Session::has('warning'))
  <p style="font-size: 2rem;" class="alert {{ Session::get('alert-class', 'alert-warning') }}">
    {{ Session::get('warning') }}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  </p>
  @elseif (Session::has('error'))
  <p style="font-size: 2rem;" class="alert {{ Session::get('alert-class', 'alert-danger') }}">
    {{ Session::get('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  </p>
  @endif
  <p>Esta es la última etapa del proceso, si llegaste hasta aquí significa que:</p>
  <ol>
    <li>Entregaste la documentación en tiempo y forma</li>

    <li>Cumples con los criterios laborales de ingreso al programa</li>

    <li>Cuentas con la documentación que avala haber cursado los estudios del nivel inmediato anterior que deseas cursar
      en la Universidad Virtual CNCI.</li>
  </ol>

  <p>Para finalizar tu inscripción requerimos lo siguiente:</p>

  <p><b>1. Descarga los siguientes formatos,</b> llénalos con letra de molde con tinta azul y saca una copia:</p>

  <ul style="list-style-type: square">
    <li><i>Formato <u><a href="https://drive.google.com/file/d/1M0mG5P5goIm9zAVFoTXZSuoWaHVWYMxq/view" target="_blank">
            <font color="#000000">Entrevista Inicial</font>
          </a></u></li>
    <li>Formato Aceptación de Descuento vía nómina (<u><a
          href="https://drive.google.com/file/d/1rHV_l8TOBXrTzi37LI1pOCf1EZcJ3qFI/view" target="_blank">
          <font color="#000000">Bachillerato,</font></u>
      <u><a href="https://drive.google.com/file/d/12f9rHX-MQdTNCsY1iap4dn4v03IhVfGe/view" target="_blank">
          <font color="#000000">Licenciatura o Ingeniería,</font>
        </a></u>
      <u><a href="https://drive.google.com/file/d/1XnMhSJyt8W6Xs1kxh8tMc4QZcl1lDfLE/view" target="_blank">
          <font color="#000000">Maestría</font>
        </a></u>)</li>
    <li>Formato <u><a href="https://drive.google.com/file/d/1Jj0DpkrTyFfOTGTDk6foKACMbpQ4rt2r/view" target="_blank">
          <font color="#000000">Contrato de Inscripción</font>
        </a></u></i></li>
  </ul>

  <p><b>2. Agenda una cita</b> con una asesora o un asesor de la Universidad Virtual CNCI, misma que podrás hacer en el
    siguiente formulario:</b></p>
  <h3>Sistema de citas para trámites administrativos</h3>
  <p>
    <font color="red">*Obligatorio</font>
  </p>
  <div id='calendar'></div>
  <form id="regForm" action="{{route('save_cita_bd')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="form-group col-md-3">
        <select id="nivel_edu" name="nivel_edu" onchange="activarBoton()" class="form-control" required>
          <option disabled selected>Elige Nivel Educativo</option>
          <option value="1">Bachillerato</option>
          <option value="2">Licenciatura e Ingeniería</option>
          <option value="3">Maestrias</option>
        </select><br>
      </div>
      <div class="form-group col-md-1">
        <p>RFC <font color="red"> *</font>
      </div>
      </p>
      <div class="form-group col-md-2">
        <input type="text" id="rfc" name="rfc" onchange="activarBoton()" placeholder="Ingresar RFC" class="form-control" maxlength="13"
          minlength="13"
          pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$"
          required>
      </div>
      <div class="form-group col-md-1">
        <p>Fecha <font color="red"> *</font>
      </div>
      </p>
      <div class="form-group col-md-2">
        <input type="text" id="fecha_select" name="fecha_select" class="form-control" readonly required>
      </div>
      <div class="form-group col-md-1">
        <p>Horarios disponibles<font color="red">*</font>
      </div>
      </p>
      <div class="form-group col-md-2">
        <select id="horario_select" name="horario_select" class="form-control" required>
          <option value="sn" disabled>Elige</option>
        </select><br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="float-right">
          <button id="enviar_cita" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </form>

  <p><b> 3. Acude a tu cita</b> con los documentos en original y copia para su cotejo:</p>


  <ul style="list-style-type: square">
    <li>Acta de Nacimiento,</li>
    <li>Clave Única de Registro de Población (CURP) (lo puedes descargar desde la página https://www.gob.mx/curp/),</li>
    <li>Comprobante de Domicilio (no mayor a tres meses),</li>
    <li>Identificación Oficial vigente (INE),</li>
    <li>Último recibo de nómina (a la quincena vigente),</li>
  </ul>
  <p>Comprobante de estudios considerando que: </p>
  <ul>
    <p><b>- Si deseas inscribirte a Bachillerato:</b> Certificado total de estudios del grado Secundaria<br>
      <b>- Si deseas inscribirte a Licenciatura e Ingeniería:</b> Certificado total de estudios de Bachillerato o
      equivalente<br>
      <b>- Si deseas inscribirte a Maestría:</b> Título Profesional y/o Cédula Profesional de nivel superior.</p>
  </ul>
  <ul style="list-style-type: square">
    <li>Seis (6) fotografías tamaño infantil, blanco y negro, papel mate, recientes e iguales,</li>
    <li>Formato de Entrevista Inicial,</li>
    <li>Formato de Aceptación de retención vía nómina,</li>
    <li>Formato de Contrato inscripción,</li>
    </font>
  </ul>
  <p>Todas las citas se llevarán a cabo en el Centro de Enlace ubicado en Fray Servando Teresa de Mier #77. Col. Obrera.
    Ciudad de México. Planta Baja.</p>
  <p><b>IMPORTANTE:</b> Debido a la contingencia sanitaria por el COVID-19 es indispensable cumplir con las normas de
    higiene señaladas
    por nuestras autoridades:</p>
  <p>Previo al ingreso al edificio</p>
  <ul style="list-style-type: square">
    <li>Uso de cubrebocas en todo momento. Recuerda que debe tapar nariz y boca.</li>
    <li>Uso de gel antibacterial.</li>
    <li>Toma de temperatura.</li>
  </ul>

  <p>Previo al ingreso al Centro de Enlace contarás con</p>
  <ul style="list-style-type: square">
    <li>Uso de cubrebocas en todo momento. Recuerda que debe tapar nariz y boca.</li>
    <li>Uso de gel antibacterial.</li>
    <li>Toma de temperatura.Limpieza de calzado en tapete sanitizante.</li>
    <li>Toallita sanitizante para la limpieza del escritorio donde serás atendido.</li>
  </ul>
  <p>De igual manera, las y los asesores de la Universidad Virtual CNCI portarán cubrebocas, careta y harán uso del gel
    antibacterial en todo momento.</p>

  <p><b>NO se recibirán personas que no tengan cita.</b></p>


</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection