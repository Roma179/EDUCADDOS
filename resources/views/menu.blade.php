<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title',"Inicio")</title>
  <script type="text/javascript">
    // var global URL
var url = '{!! URL::asset('') !!}';
  </script>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  {{--  <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/jquery.datetimepicker.css')}}"/> --}}
  <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/main.css')}}" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  {{-- <script src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script> --}}
  {{--  <script src="{{URL::asset('assets/js/jquery.datetimepicker.full.min.js')}}" type="text/javascript"> </script>
  --}}
  <script src="{{URL::asset('assets/js/main.js')}}" type="text/javascript"> </script>
  <script src="{{URL::asset('assets/js/es.js')}}" type="text/javascript"> </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="{{ asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css">
  <style>
    .bs-example {
      margin: 20px;
    }

    body {
      padding-top: 70px;
    }
  </style>
  @yield('scripts')
</head>

<body>
  <div class="bs-example">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <img style="width: 400px; height: 85px; padding-top: 10px;" src="{{asset('img/LogosVerde.jpeg')}}"
        alt="Imagenes">
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
          <a href="{{ url('/inicio') }}" class="nav-item nav-link">Inicio</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{url('oferta_academica')}}" id="navbarDropdown2" role="button"
              aria-haspopup="true" aria-expanded="false">
              Oferta Educativa
            </a>
            <div class="dropdown-menu" style="margin-top:0rem;">
              <a class="dropdown-item" href="{{url('media_superior')}}">Media Superior</a>
              <a class="dropdown-item" href="{{url('licenciatura_ingenieria')}}">Licenciatura e Ingeniería</a>
              <a class="dropdown-item" href="{{url('maestria')}}">Maestría</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown3" href="{{url('convocatoria')}}" role="button"
              aria-haspopup="true" aria-expanded="false">
              Convocatoria 2021
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown3" style="margin-top:0rem;">
              <a class="dropdown-item" href="{{ url('/pre-registro') }}">Etapa 1. Pre-Inscripción</a>
              <a class="dropdown-item" href="{{ url('/curso-induccion') }}">Etapa 2. Curso de Inducción</a>
              <a class="dropdown-item" href="{{ url('/Inscripcion') }}">Etapa 3. Inscripción</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <!--  <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></a>-->
          </li>
        </div>
      </div>
    </nav>
  </div>
  <div class="container">
    @yield('content')
  </div>
</body>
<script>
  const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$("#navbarDropdown3").on('click',function(){
  //redirecciono a una url
  window.location.href='/EDUCAD/public/convocatoria2020';
});

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
</script>

</html>