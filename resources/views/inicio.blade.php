@extends('menu')
@section('title','Bienvenidos Plataforma EDUCAD')
@section('content')

<div class="container-fluid">
    {{--  <div style="position: relative;">
        <img style="margin:auto; height:700px; width:100%;" src="{{asset('img/escritorio_laptop.jpg')}}">
        <div style="top: 5%; position: absolute; z-index: 50;">
            <div style="display: block; font-style: normal; color: #fff; font-size: 45pt; padding: 5px; font-weight: 500;" align="center">Programa de Educación a Distancia para las personas servidoras públicas del Gobierno de la
                Ciudad de México.</div>
            <div style="margin-top: 40px; display: block; color: #fff; font-size: 45pt; padding: 5px; font-weight: 500;" align="center">DGAP-EDUCAD</div>
        </div>
    </div>  --}}
    <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Programa de Educación a Distancia para las personas servidoras públicas del Gobierno de la
        Ciudad de México.</h1>  
    <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26; margin-top: 45px;">EDUCAD-DGAP</h1>
    <div class="row" style="margin-top 40px;">
        <div style="font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;
            font-style: inherit;">
            <a style="margin-top: 0;
            margin-bottom: 0;
            display: inline;
            overflow-wrap: break-word;
            overflow: hidden;
            margin-left: 8px;
            text-decoration: underline;" href="#consiste">EN QUÉ CONSISTE EDUCAD-DGAP</a>
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
            text-decoration: underline;" href="#objetivo">OBJETIVO</a>
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
            text-decoration: underline;" href="#poblacion">POBLACIÓN A LA QUE ESTÁ DIRIGIDO</a>
        </div>
    </div>
    <div class="row">
        <div class="card-group">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="consiste" class="card border-light" style="margin-top: 40px; padding: 10px;">
                        <div class="card-title">
                            <h2>EN QUÉ CONSISTE EDUCAD-DGAP</h2>
                        </div>
                        <div class="card-text">
                            <p align="justify">EDUCAD-DGAP es un programa cuya finalidad es que las personas servidoras
                                públicas del Gobierno de
                                la Ciudad de México que, por diversos motivos, una vez terminada la educación secundaria
                                no
                                pudieron continuar con sus estudios; ya sea porque se incorporaron al mercado laboral,
                                falta de
                                tiempo, falta de recursos económicos, entre otros, continúen su formación académica.

                                Para cumplir con este propósito, el Gobierno de la Ciudad de México, a través de la
                                Dirección
                                General de Administración de Personal de la Secretaría de Administración y Finanzas ha
                                creado
                                alianzas con las Instituciones de Educación Superior (IES) del país, a fin de que
                                otorguen
                                cuotas preferenciales y que de esta manera las trabajadoras y los trabajadores de la
                                Administración Pública Centralizada y Paraestatal, puedan retomar los estudios en los
                                niveles
                                Medio Superior y Superior (incluyendo Posgrado).

                                En este sentido, la primera IES que se sumó a este esfuerzo son los Centros de Educación
                                Superior, CNCI, mejor conocida como la Universidad CNCI, con quien se firmó un Convenio
                                de
                                Colaboración para crear un sistema de descuentos vía nómina para cursar estudios de
                                Bachillerato
                                General, Licenciaturas, Ingenierías y Maestrías, en la modalidad No Escolarizada, opción
                                Virtual.

                                De igual manera, el Gobierno de la Ciudad de México, a través de las Dependencias,
                                Órganos
                                Desconcentrados, Alcaldías y Entidades se suman a este esfuerzo otorgando el apoyo
                                académico con
                                el que se cubre el gasto por concepto de inscripción y re-inscripción en el plan de
                                estudios en
                                el que se inscriben.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="objetivo" class="card border-light" style="margin-top: 40px; padding: 10px;">
                        <div class="card-title">
                            <h2>OBJETIVO</h2>
                        </div>
                        <div class="card-text">
                            <p align="justify">Formar profesionistas con los conocimientos y habilidades suficientes,
                                que les permitan ofrecer alternativas y soluciones para los problemas tecnológicos e
                                informáticos, legales, administrativos y de Recursos Humanos de la Administración
                                Pública de la Ciudad de México.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="poblacion" class="card border-light" style="margin-top: 40px; padding: 10px;">
                        <div class="card-title">
                            <h2>POBLACIÓN A LA QUE ESTÁ DIRIGIDO</h2>
                        </div>
                        <div class="card-text">
                            Personas servidoras públicas (PSP) que:
                            <ul>
                                <li>Pertenezcan a la Administración Pública Centralizada y Paraestatal ya sean de base,
                                    con o sin dígito sindical, de estructura o de confianza;</li>
                                <li>Pertenezcan al tipo de nómina: 1, 4, 5 y 8;</li>
                                <li>Pertenezcan a los Universos A, C, C1, O, P, Q, Q1, S, T, V</li>
                                <li>No estén de licencia sin goce de sueldo, comisión sindical, inscrito en el programa
                                    de retiro voluntario o bien, en proceso de jubilación.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection