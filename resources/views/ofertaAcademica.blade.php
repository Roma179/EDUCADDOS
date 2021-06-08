@extends('menu')
@section('title','Bienvenidos Plataforma EDUCAD')
@section('content')
<div class="container-fluid">
    <h1 style="text-align: center; padding-bottom: 18px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Oferta Académica</h1>
    <div class="row">
        <div class="card border-light" align="justify">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    El Prestador de los Servicios Educativos para EDUCAD-DGAP es la Universidad CNCI, quien tiene más de
                    24 años de experiencia en el mercado y de manera específica 15 años impartiendo la modalidad de
                    educación en línea.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light" align="justify">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    La Universidad CNCI, ofrece estudios de Nivel Medio Superior y Superior -en el que se incluyen
                    Posgrados- con Reconocimiento de Validez Oficial de Estudios (RVOE) expedido y Nuevo Léon, por la Secretaría de
                    Educación del Estado de Coahuila.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light" align="justify">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    Todos los programas educativos que ofrece están orientados al desarrollo de competencias
                    profesionales. Los contenidos y actividades se desarrollan por personal docente de la misma
                    institución altamente calificado y capacitado en las diferentes áreas de especialidad que los
                    integran. Estos diseños están sujetos a revisiones y controles constantes para asegurar su
                    actualidad y pertinencia.
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="card border-light" align="justify">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    La Universidad CNCI es la primera institución privada en ser acreditada en sus programas en línea
                    por el Consejo de Acreditación en Ciencias Sociales, Contables y Administrativas en la Educación
                    Superior de Latinoamérica (CACSLA). Acreditación de carácter Internacional.
                </span>
            </p>
        </div>
    </div>
    <div class="row float-right">
        <div class="card border-light">
            <a class="float-right" style="color:black; font-style:italic; text-decoration:underline;" target="_blank"
                href="{{url('uploads/manuales/Perfil Universidad CNCI.pdf')}}">
                [Más información]
            </a>
        </div>
    </div>
</div>

@endsection