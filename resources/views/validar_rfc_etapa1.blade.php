@extends('menu')
@section('title','Etapa 1. Pre-inscripcion')
@section('content')
<style>
 #regForm {
    background-color: #f5f5f0;
    margin: 100px auto;
    font-family: Arial, Helvetica, sans-serif;
    padding: 20px;
    width: 55%;
    min-width: 370px;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid #00b140;
    outline: none;
    border: none;
  }

  input {
    padding: 7px;
    width: 100%;
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    border: 3px solid #00b140;
    border-radius: 15px;
  }

  button {
    background-color: #00b140;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family: Arial;
  }
</style>
<div class="container mt-5">
  @if (session('status'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
      {{ session('status') }}
  </div>
@endif  
<center><h3>Pre-registro</h3></center>
<p>En esta etapa se validará, a través de diversos documentos, que cumplas con los requisitos laborales y académicos según el nivel de estudios
 en el que te gustaría inscribirte.</p>

<p>Es por ello que te pedimos realices los siguientes pasos.</p>

<p><b>1. Llena el siguiente formulario.</b> Te recomendamos tener a la mano el último recibo de nómina.</p>
<p>El propósito de este formulario es recabar información para generar su pre-inscripción en la convocatoria 2020 del Programa de Educación a
 Distancia de la Administración Pública de la Ciudad de México "EDUCAD". La información proporcionada en este formulario, será
 empleada de manera exclusiva para dicho fin.</p>
<p><b><font color="red">*Obligatorio</font></b></p>
<p style="color:#054a41; font-size: 24px; text-align: center;"><b>Aviso de privacidad</b><br>
<FONT SIZE=2>Los Datos Personales que se solicitan en el presente formulario se encuentran protegidos por la Ley de Protección de Datos Personales en 
Posesión de Sujetos Obligados de la Ciudad de México, por lo que su difusión se encuentra tutelada en sus artículos 3 fracciones IX, 
XXVIII, XXIX, XXXIV, XXXVI, 9, 16, 25, 26, 37, 41, 46, 49, 50, de dicha Ley y demás relativos y aplicables; debiendo sujetarse en su 
caso, a las disposiciones relativas a la creación, modificación o supresión de datos personales previstos. Asimismo, deberá estarse a 
lo señalado en los numerales 1, 3, 12, 18, 19, 20, 21, 23, 24, 29, 35 y demás aplicables de los Lineamientos para la Protección de Datos 
Personales en el Distrito Federal. En el uso de las tecnologías de la información y comunicaciones de la Ciudad de México, deberá observarse 
puntualmente lo dispuesto por la Ley de Gobierno Electrónico de la Ciudad de México, Ley de Operación e Innovación Digital para la Ciudad de México, 
Criterios para la Dictaminación de Adquisiciones y Uso de Recursos Públicos Relativos a las Tecnologías de la Información y las Comunicaciones de la 
Ciudad de México y demás relativas y aplicables.</font></p>
<p align="justify"><font size=2><b>Autorizo a la Dirección de Desarrollo de la Competencia Laboral, Igualdad Sustantiva y Derechos Humanos así como al Prestador de los Servicios Educativos, 
el uso de mi correo electrónico y número de teléfono para el envío de información relativo al Programa </font></b><font color="red"> * </font></p>
<div class="form-group col-md-2">
<select id="select" name="select" class="form-control">
<option value="value1">Elige</option>
  <option value='0'>Acepto</option>
  <option value='1'>No Acepto</option>
</select>
</div>

@if($errors->any())
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  <div class="alert-text">
    @foreach ($errors->all() as $error)
    <span>{{$error}}</span>
    @endforeach
  </div>
</div>
@endif
<form id="regForm" action="{{route('guardar_pre-registro')}}" method="POST" enctype="multipart/form-data" style="display:none;">
 <label style="color:#777777; font-size: 40px; text-align: left; ">Preinscripción</label>
    @csrf
 <label style="color:#054a41; font-size: 24px; text-align: center;">Para iniciar el proceso de preinscripción, proporciona el siguiente dato</label>
 <label style="color:#777777; font-size: 25px; text-align: left;">RFC</label>
    <p><input type="text" id="rfc" placeholder="RFC de la persona trabajadora" oninput="this.className = ''" maxlength="13" name="RFC" required></p>
 
    <button type="submit">Validar RFC</button>
</form>    



<!--<button class="btn btn-primary" style="border-color:#31b700; background-color: #31b700;" >Siguiente </button>-->

<p><b>2. Conforma tu expediente digital,</b> por favor, toma como base el manual que te corresponda:</p>
<ul style= "list-style-type: square">

<li>Expediente digital para <a href="https://drive.google.com/file/d/1Z66uklaXLkLV7UkDVJHDD3fQkm9lzJIo/view" target="_blank"><u><font color="#000000"> ingreso al Bachillerato</u></font></a></li>

<li>Expediente digital para <a href="https://drive.google.com/file/d/1zV0PQSv7sKsMJ--qR2PIzRZYxbfoMKAx/view" target="_blank"><u><font color="#000000"> ingreso a Licenciatura</u></font></a></li>

 <li>Expediente digital para <a href="https://drive.google.com/file/d/1SFf-1vH8szHDqKI6xMnot2ve30p4Zaob/view" target="_blank"><u><font color="#000000"> ingreso a Maestría</font></u> </a></li>
</ul>

<p><b>3. Envía tu expediente digital al correo electrónico<a href="mailto:inscripcionescncicdmx@gmail.com"><font color="#000000"> <u>inscripcionescncicdmx@gmail.com</u></font></b></a> En el ASUNTO del correo electrónico escribe tu <i> ID Empleado</i>.</p><br><br>
<p><b>4. Recibirás un correo electrónico en el que se te informará el dictamen.</b></p>

{{--  <div class="pane-header">
        <a href="{{ url('/prueba') }}">Entrar a la entrega de documentos</a>  
    </div>  --}}



</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--Desglozar div para el RFC -->
<script>
$(document).ready(function(){
    $('#select').on('change',function(){
    var selectValor = ''+$(this).val();
    //alert (selectValor);

   if(selectValor == 0){
       // alert ('entrando al if');
        //$('#pruebass').show();
        $("#regForm").css('display', 'block');
    }else{
        alert('Debe aceptar el aviso de privacidad para continuar con el proceso');
        $('#regForm').css('display', 'none');
    }
    
    }); 
    
});
</script>
<!--END-->

<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
      
  } else {
    document.getElementById("prevBtn").style.display = "inline";
      
  }
  if (n == (x.length - 1)) {

    document.getElementById("nextBtn").innerHTML = "Enviar";
   swal("Bienvenidos", "Esta datos son privados solo el padre o tutor son responsable de dichos datos establecidos", "success");

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
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();

      swal("Exito", "Tus datos han sido enviados con exito", "success");

    return false;

  }
  // Otherwise, display the correct tab:
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
    if (y[i].value == "") {
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


{{--  <script>
  $(document).ready(function() {
    $( "#rfc" ).on('change',function() {
      $("#enlace_ws").get(0).click();
    });
  });
</script>  --}}


@endsection