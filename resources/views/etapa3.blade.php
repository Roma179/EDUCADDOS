@extends('menu')
@section('title','Etapa 3: Inscripción')
@section('content')
<style>
p{
  text-align: justify;
  }
</style>
<div class="container mt-5">
<center><h1>Inscripción</h1></center>
<p>Esta es la última etapa del proceso, si llegaste hasta aquí significa que:</p>
<ol>
<li>Entregaste la documentación en tiempo y forma</li>

<li>Cumples con los criterios laborales de ingreso al programa</li>

<li>Cuentas con la documentación que avala haber cursado los estudios del nivel inmediato anterior que deseas cursar en la  Universidad Virtual CNCI.</li>
</ol>

<p>Para finalizar tu inscripción requerimos lo siguiente:</p>

<p><b>1. Descarga los siguientes formatos,</b> llénalos con letra de molde con tinta azul y saca una copia:</p>

<ul style= "list-style-type: square">
<li><i>Formato <u><a href="https://drive.google.com/file/d/1M0mG5P5goIm9zAVFoTXZSuoWaHVWYMxq/view" target="_blank"><font color="#000000">Entrevista Inicial</font></a></u></li>
<li>Formato Aceptación de Descuento vía nómina (<u><a href="https://drive.google.com/file/d/1rHV_l8TOBXrTzi37LI1pOCf1EZcJ3qFI/view" target="_blank"><font color="#000000">Bachillerato,</font></u> 
<u><a href="https://drive.google.com/file/d/12f9rHX-MQdTNCsY1iap4dn4v03IhVfGe/view" target="_blank"><font color="#000000">Licenciatura o Ingeniería,</font></a></u> 
<u><a href="https://drive.google.com/file/d/1XnMhSJyt8W6Xs1kxh8tMc4QZcl1lDfLE/view" target="_blank"><font color="#000000">Maestría</font></a></u>)</li>
<li>Formato <u><a href="https://drive.google.com/file/d/1Jj0DpkrTyFfOTGTDk6foKACMbpQ4rt2r/view" target="_blank"><font color="#000000">Contrato de Inscripción</font></a></u></i></li>
</ul>

<p><b>2. Agenda una cita</b> con una asesora o un asesor de la Universidad Virtual CNCI, misma que podrás hacer en el siguiente formulario:</b></p>
<h3>Sistema de citas para trámites administrativos</h3>
<p><font color="red">*Obligatorio</font></p>
<p>Fecha <font color="red"> *</font></p>
<div class="form-group col-md-2">
<input type="date" id="start" name="trip-start" value="dd-mm-aaaa" min="1850-01-01" max="2100-12-31" class="form-control">
</div>
<p>Horario<font color="red"> *</font></p>
<div class="form-group col-md-2">
<select name="select" class="form-control">
  <option value="sn">Elige</option>
  <option value="opc1">8:00 a 8:30</option>
  <option value="opc2">8:30 a 9:00</option>
  <option value="opc3">9:00 a 9:30</option>
  <option value="opc4">9:30 a 10:00</option>
  <option value="opc5">10:00 a 10:30</option>
  <option value="opc6">10:30 a 11:00</option>
  <option value="opc7">11:00 a 11:30</option>
  <option value="opc8">11:30 a 12:00</option>
  <option value="opc9">12:00 a 12:30</option>
  <option value="opc10">12:30 a 13:00</option>
  <option value="opc11">13:00 a 13:30</option>
  <option value="opc12">13:30 a 14:00</option>
  <option value="opc13">14:00 a 14:30</option>
  <option value="opc14">14:30 a 15:00</option>
  <option value="opc15">15:00 a 15:30</option>
  <option value="opc">15:30 a 16:00</option>
</select><br>
</div>

<p><b> 3. Acude a tu cita</b> con los documentos en original y copia para su cotejo:</p>
<font size=2>
<ul style= "list-style-type: square">
<li>Acta de Nacimiento,</li>
<li>Clave Única de Registro de Población (CURP) (lo puedes descargar desde la página https://www.gob.mx/curp/),</li>
<li>Comprobante de Domicilio (no mayor a tres meses),</li>
<li>Identificación Oficial vigente (INE),</li>
<li>Último recibo de nómina (a la quincena vigente),</li>
</ul>
<p>Comprobante de estudios considerando que: </p>
<ul>
        <p><b>- Si deseas inscribirte a Bachillerato:</b> Certificado total de estudios del grado Secundaria<br>
        <b>- Si deseas inscribirte a Licenciatura e Ingeniería:</b> Certificado total de estudios de Bachillerato o equivalente<br>
        <b>- Si deseas inscribirte a Maestría:</b> Título Profesional y/o Cédula Profesional de nivel superior.</p>
 </ul>
<ul style= "list-style-type: square">
<li>Seis (6) fotografías tamaño infantil, blanco y negro, papel mate, recientes e iguales,</li>
<li>Formato de Entrevista Inicial,</li>
<li>Formato de Aceptación de retención vía nómina,</li>
<li>Formato de Contrato inscripción,</li></font>
</ul>
<p>Todas las citas se llevarán a cabo en el Centro de Enlace ubicado en Fray Servando Teresa de Mier #77. Col. Obrera. Ciudad de México. Planta Baja.</p>
<p><b>IMPORTANTE:</b> Debido a la contingencia sanitaria por el COVID-19 es indispensable cumplir con las normas de higiene señaladas
 por nuestras autoridades:</p>
 <p>Previo al ingreso al edificio</p>
<ul style= "list-style-type: square">
<li>Uso de cubrebocas en todo momento. Recuerda que debe tapar nariz y boca.</li>
<li>Uso de gel antibacterial.</li>
<li>Toma de temperatura.</li>
</ul>

<p>Previo al ingreso al Centro de Enlace contarás con</p>
<ul style= "list-style-type: square">
<li>Uso de cubrebocas en todo momento. Recuerda que debe tapar nariz y boca.</li>
<li>Uso de gel antibacterial.</li>
<li>Toma de temperatura.Limpieza de calzado en tapete sanitizante.</li>
<li>Toallita sanitizante para la limpieza del escritorio donde serás atendido.</li>
</ul>
<p>De igual manera, las y los asesores de la Universidad Virtual CNCI portarán cubrebocas, careta y harán uso del gel antibacterial en todo momento.</p>

<p><b>NO se recibirán personas que no tengan cita.</b></p>


</div>
@endsection