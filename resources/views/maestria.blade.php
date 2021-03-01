@extends('menu')
@section('title','Bienvenidos Plataforma EDUCAD')
@section('content')

<div class="container-fluid">
    {{--  <div style="position: relative;">
        <img style="margin:auto; height:300px; width:100%;" src="{{asset('img/media-superior.jpg')}}">
        <div style="top: 25%; left: 35%; position: absolute; z-index: 50;">
            <div style="display: block; font-style: normal; color: #fff; font-size: 45pt; padding: 5px; font-weight: 500;" align="center">Maestría</div>
        </div>
    </div>  --}}
    <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Maestría</h1>
    <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
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
                    Plan de Estudios: cuatro (4) semestres de 16 semanas cada uno. Cada semestre se divide a su vez en módulos (4) con una duración de cuatro semanas.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    Materias: 16 curriculares + cinco co-curriculares. Cada semestre cursarás cuatro materias, una por módulo; sin embargo, habrá módulos en los que se asignen dos materias para que puedas cursar las co-curriculares.
                </span>
            </p>
        </div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="card-group">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card border-light">
                    <h4 style="color:#000; font-family: " Open Sans", sans-serif; ">MAESTRÍAS EN:</h4>
                    <ol>
                        <li><a>Administración</a>.<strong>RVOE</strong> SEDU 011722-13-18-013</li>
                        <li><a>Administración del Capital Humano</a>.<strong>RVOE</strong> SEDU 011711-6-18-006</li>
                        <li><a>Administración y Finanzas</a>.<strong>RVOE</strong> SEDU 011723-14-18-014 [NUEVA]</li>
                        <li><a>Administración y Mercadotecnia</a>.<strong>RVOE</strong>SEDU 011724-15-18-015 [NUEVA]</li>
                        <li><a>ducación con Acentuación en Tecnología Educativa</a>.<strong>RVOE</strong> SEDU 011725-18-18-016 [NUEVA]</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span style="font-family: Open Sans;">
                    Más información: revisa el siguiente video.
                </span>
            </p>
        </div>
    </div>
    
    <div class=" row" style="margin-top:3rem; margin-left: 16rem;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/UohKyEeCLV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="row" style=" margin-top: 40px; margin-bottom: 40px; margin-left:28rem;">
        <div
                                style="background-color: rgba(7,174,85,1); color: rgba(0,0,0,1); font-size: 12pt; border-radius: 9px; border-style:solid;">
                                <a href="{{url('/inicio/convocatoria2020/etapa1-pre-registro')}}" style="text-decoration: none; color: #000;">
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