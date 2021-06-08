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
        <div style="top: 25%; left: 35%; position: absolute; z-index: 50;">
            <div style="display: block; font-style: normal; color: #fff; font-size: 45pt; padding: 5px; font-weight: 500;" align="center">Maestría</div>
        </div>
    </div>  --}}
    <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Maestría</h1>
    {{--  <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
            <p style="
                font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    La Universidad CNCI ofrece seis diferentes planes de estudio, con Reconocimiento de Validez Oficial de Estudios de la Autoridad Educativa en el Estado de Coahuila.
                </span>
            </p>
        </div>
    </div>  --}}
    <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    La Universidad CNCI ofrece seis diferentes planes de estudio, con Reconocimiento de Validez Oficial de Estudios de la Autoridad Educativa en el Estado de Coahuila.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
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
                    Plan de Estudios: cuatro (4) semestres de 16 semanas cada uno. Cada semestre se divide a su vez en módulos (4) con una duración de cuatro semanas.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Materias: 16 en total. Cada semestre cursarás cuatro materias, una por módulo.
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
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" 
                            href="https://drive.google.com/file/d/1MkMrxV--WOgmZgq7XddVJkoH4bk7dqbH/view">Administración</a>. <strong>RVOE</strong> SEDU 0528163272</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" 
                            href="https://drive.google.com/file/d/1GCmpqsmScvzba8Lgh_cSFowPJ41vqZFl/view">Administración del Capital Humano</a>. <strong>RVOE</strong> SEDU 0528163269</li>
                    </ol>
                </div>
                <div class="card border-light">
                    <h6 style="margin-left: 1.5rem; font-family: " Open Sans", sans-serif;"><strong>NUEVA OFERTA EDUCATIVA</strong></h6>
                    <ol>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" 
                            href="https://drive.google.com/file/d/1Sp9o7PceMpRkQPFqHGC8PsyHaSqRSnUZ/view">Administración y Finanzas</a>. <strong>RVOE</strong> 0528163265</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" 
                            href="https://drive.google.com/file/d/1DzmnOR3t2riDzgP3M35D9BBERAHVDQ0V/view">Administración y Mercadotecnia</a>. <strong>RVOE</strong> 0528163267</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" 
                            href="https://drive.google.com/file/d/1AGbZRzl4s6SBNgdrUR4V7sM-laBJJF4J/view">Educación con Acentuación en Tecnología Educativa</a>. <strong>RVOE</strong> 0528163255</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" >Derecho Laboral</a>. <strong>RVOE EN TRÁMITE.</strong></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Más información: revisa el siguiente video.
                </span>
            </p>
        </div>
    </div>
    
    <div class=" row" style="margin-top:3rem; margin-left: 16rem;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/UohKyEeCLV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="row" style=" margin-top: 40px; margin-bottom: 40px; margin-left:26rem;">
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