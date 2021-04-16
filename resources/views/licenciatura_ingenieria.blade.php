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
<div class="container">
    {{--  <div style="position: relative;">
        <img style="margin:auto; height:300px; width:100%;" src="{{asset('img/media-superior.jpg')}}">
        <div style="top: 25%; left: 17%; position: absolute; z-index: 50;">
            <div style="display: block; font-style: normal; color: #fff; font-size: 45pt; padding: 5px; font-weight: 500;" align="center">Licenciatura e Ingeniería</div>
        </div>
    </div>  --}}
    <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Licenciatura e Ingeniería</h1>
    <div class="row">
        <div class="card border-light">
            <p>
                <span>
                    La Universidad CNCI cuenta con siete licenciaturas y tres ingenierías con RVOE de la Autoridad
                    Educativa de la Ciudad de México; además de seis licenciaturas y una ingeniería con RVOE de la
                    Autoridad Educativa del Estado de Coahuila.

                    La principal diferencia, además de los contenidos, es la duración de los ciclos escolares.

                    A continuación podrás leer las propuestas según la Autoridad Educativa que otorga el RVOE.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div style="font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;
            font-style: inherit;">
            <a style="margin-top: 0;
            margin-bottom: 0;
            display: inline;
            overflow-wrap: break-word;
            overflow: hidden;
            margin-left: 8px;
            text-decoration: underline;" href="#secretaria-edu">Secretaría de Educación, Ciencia, Tecnología e
                Innovación en la Ciudad de México</a>
        </div>
    </div>
    <div class="row">
        <div style="font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;
            font-style: inherit;">
            <a style="margin-top: 0;
            margin-bottom: 0;
            display: inline;
            overflow-wrap: break-word;
            overflow: hidden;
            margin-left: 8px;
            text-decoration: underline;" href="#sec-edu-coahuila">Secretaría de Educación del Estado de Coahuila</a>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;" id="secretaria-edu">
        <h3 style="font-weight: 200; font-size: 20pt; color:#000; font-family:" Open Sans", sans-serif;"><strong>Secretaría de
            Educación, Ciencia, Tecnología e Innovación en la Ciudad de México</strong></h3>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Duración: tres (3) años.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Plan de Estudios: nueve (9) tetramestres de 15 semanas cada uno. Cada tetramestre se divide a su vez
                    en módulos (3) con una duración de cinco semanas.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Materias: 56 curriculares y cuatro co-curriculares. Se cursan dos en cada módulo; es decir, cada
                    tetramestre cursarás seis materias; a fin de cubrir las materias co-curriculares, habrá módulos en
                    los que cursarás tres materias.
                </span>
            </p>
        </div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="card-group">
            <div class="col-6 col-md-6 col-lg-6">
                <div class="card border-light">
                    <h4 style="color:#000; font-family: " Open Sans", sans-serif; ">LICENCIATURAS EN:</h4>
                    <ol>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/CP.pdf')}}">Contador Público</a>. <strong>RVOE</strong> SEDU 011709-4-18-004</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LAE.pdf')}}">Administración de Empresas</a>. <strong>RVOE</strong> SEDU 011712-7-18-007</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LD.pdf')}}">Derecho</a>. <strong>RVOE</strong> SEDU 011710-5-18-005</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LIA.pdf')}}">Informática Administrativa</a>. <strong>RVOE</strong> SEDU 011718-9-18-009</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LRH.pdf')}}">Recursos Humanos</a>. <strong>RVOE</strong> SEDU 011720-11-18-011</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LCE.pdf')}}">Ciencias de la Educación</a>. <strong>RVOE</strong> SEDU 011721-12-18-012 [NUEVA]</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LM.pdf')}}">Mercadotecnia</a>. <strong>RVOE</strong> SEDU 011717-8-18-008 [NUEVA]</li>
                    </ol>
                </div>
            </div>
            <div class=" col-6 col-md-6 col-lg-6">
                    <div class=" card border-light">
                        <h4 style="color:#000; font-family: " Open Sans", sans-serif; ">INGENIERÍAS EN:</h4>
                    <ol>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/ITC.pdf')}}">Tecnologías Computacionales</a>. <strong>RVOE</strong> SEDU 011708-3-18-003</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/IIS.pdf')}}">Industrial y de Sistemas</a>. <strong>RVOE</strong> SEDU 011719-10-18-010</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/IL.pdf')}}">Logística</a>. <strong>RVOE</strong> SEDU 011726-17-18-017 [NUEVA]</li>
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
        <iframe width="560" height="315" src="https://www.youtube.com/embed/r26dnYpZu7A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    <div class="row" style="margin-top: 30px;" id="sec-edu-coahuila">
        <h3 style="font-weight: 200; font-size: 20pt; color:#000; font-family:" Open Sans", sans-serif;"><strong>Secretaría de Educación del Estado de Coahuila</strong></h3>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Duración: tres (3) años.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Plan de Estudios:  nueve (9) tetramestres de 14 semanas cada uno. Cada tetramestre se divide a su vez en módulos (4) con una duración de cuatro semanas.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Materias: 56 curriculares y cuatro co-curriculares. Se cursan dos en cada módulo; es decir, cada tetramestre cursarás seis materias.
                </span>
            </p>
        </div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="card-group">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card border-light">
                    <h4 style="color:#000; font-family: " Open Sans", sans-serif; ">LICENCIATURAS EN:</h4>
                    <ol>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LICENCIATURA EN ADMINISTRACIÓN FINANCIERA.pdf')}}">Administración Financiera</a>. <strong>RVOE</strong> 528163237 [NUEVA]</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LICENCIATURA EN DERECHO CON ACENTUACIÓN EN ECONOMÍA.pdf')}}">Derecho con Acentuación en Economía.</a> <strong>RVOE</strong> 528163284 [NUEVA]</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LICENCIATURA EN DERECHO CORPORATIVO.pdf')}}">Derecho Corporativo</a>. <strong>RVOE</strong> 528163239 [NUEVA]</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LICENCIATURA EN DERECHO Y FINANZAS.pdf')}}">Derecho y Finanzas</a>. <strong>RVOE</strong> 528163236 [NUEVA]</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LICENCIATURA EN GESTIÓN TURÍSTICA.pdf')}}">Gestión Turística</a>. <strong>RVOE</strong>  528163260 [NUEVA]</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/LICENICIATURA EN MERCADOTECNIA TURISTICA.pdf')}}">Mercadotecnia Turística</a>. <strong>RVOE</strong> 528163238 [NUEVA]</li>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/.pdf')}}">Derecho Laboral</a>. <strong>RVOE SEDU COAHUILA EN TRÁMITE.</strong></li>
                    </ol>
                    <h4 style="color:#000; font-family: " Open Sans", sans-serif; ">INGENIERÍAS EN:</h4>
                    <ol>
                        <li><a style="color:black; font-style:italic; text-decoration:underline;" target="_blank" href="{{url('uploads/licenciatura/INGENIERÍA EN GESTIÓN EMPRESARIAL.pdf')}}">Gestión Empresarial</a>. <strong>RVOE</strong> 528163242 [NUEVA]</li>
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
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2JYxq9PICYM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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