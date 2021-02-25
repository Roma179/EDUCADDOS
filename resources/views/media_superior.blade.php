@extends('menu')
@section('title','Bienvenidos Plataforma EDUCAD')
@section('content')

<div class="container-fluid">
    {{--  <div style="position: relative;">
        <img style="margin:auto; height:300px; width:100%;" src="{{asset('img/media-superior.jpg')}}">
        <div style="top: 25%; left: 27%; position: absolute; z-index: 50;">
            <div style="display: block; font-style: normal; color: #fff; font-size: 45pt; padding: 5px; font-weight: 500;" align="center">Media Superior</div>
        </div>
    </div>  --}}
    <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Media Superior</h1>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    La Universidad Virtual CNCI te ofrece cursar el Bachillerato General en la modalidad No
                        escolarizada,
                        opción virtual.
                        
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light" style="margin-top: 30px;">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    Duración: dos (2) años.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    Plan de Estudios: seis (6) tetramestres de 15 semanas cada uno. Cada tetramestre se divide a su vez
                    en módulos (3) con una duración de cinco semanas
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    Materias: 36 en total. Se cursan dos (2) en cada módulo; es decir, cada tetramestre cursarás seis
                    (6) materias.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    Horas de estudio: para realizar las lecturas y actividades tanto de aprendizaje como de evaluación,
                    requieres dedicar mínimo ocho horas a la semana.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    RVOE: SEDU 021714-2-18-002.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    ¿Quieres conocer el Plan de Estudios? Haz clic aquí <a href="#">Bachillerato General</a>
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    Más información: revisa el siguiente video.
                </span>
            </p>
        </div>
    </div>
    <div class="row" style="margin-top:3rem; margin-left: 16rem;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/lf2go_HjK5s" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    <div class="row" style=" margin-top: 40px; margin-bottom: 40px; margin-left:32em;">
        <div style="background-color: rgba(7,174,85,1); color: rgba(0,0,0,1); font-size: 12pt; border-radius: 9px; border-style:solid;">
            <a href="{{url('pre_registro')}}" style="text-decoration: none; color: #000;">
                <div style="padding-left: 12px;
        padding-right: 12px; text-align: center;
        width: 100%; margin-top:5px;">
                    <p>Quiero Inscribirme</p>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection