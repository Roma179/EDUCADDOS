@extends('menu')
@section('title','Bienvenidos Plataforma EDUCAD')
@section('content')
<style>
    .enla_inscribir {
        background-color: #00b140;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 20px;
        font-family: Arial;
    }
</style>
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
                <span>
                    La Universidad Virtual CNCI te ofrece cursar el Bachillerato General en la modalidad No
                        escolarizada,
                        opción virtual con RVOE del Estado de Nuevo León.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light" style="margin-top: 30px;">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Duración: dos (2) años.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
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
                <span>
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
                <span>
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
                <span>
                    RVOE: ABG-178/2010.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    ¿Quieres conocer el Plan de Estudios? Haz clic aquí <a href="https://drive.google.com/file/d/1CvXVwzeuHEXItTmWZiHWriEwGTatc8l9/view" target="_blank" >Bachillerato General</a>
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
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
    <div class="row" style=" margin-top: 40px; margin-bottom: 40px; margin-left:28em;">
        <div class="enla_inscribir">
            <a href="{{url('/pre-registro')}}" style="text-decoration: none;">
                <div style="padding-left: 12px;
        padding-right: 12px; text-align: center;
         margin-top:10px;">
                    <p style="color: #fff;">Quiero Inscribirme</p>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection