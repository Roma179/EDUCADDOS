@extends('menu')
@section('title','Bienvenidos Plataforma EDUCAD')
@section('content')
<div class="container-fluid">
    <h1 style="text-align: center; padding-bottom: 18px; margin-top:20px; font-size: 45pt;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -0.5px;
    line-height: 1.26;">Convocatoria 2021</h1>
    <div class="row">
        <div style="font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;
            font-style: inherit;">
            <a style="margin-top: 0;
            margin-bottom: 0;
            display: inline;
            overflow-wrap: break-word;
            overflow: hidden;
            margin-left: 8px;
            text-decoration: underline;" href="#participar">¿Quiénes pueden participar?</a>
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
            text-decoration: underline;" href="#documentacion">¿Qué documentación se requiere?</a>
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
            text-decoration: underline;" href="#criterios">¿Cuáles son los criterios de selección?</a>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;" id="participar">
        <h3 style="font-weight: 200; font-size: 20pt; color:#000; font-family:" Open Sans", sans-serif;">
            <strong>¿Quiénes pueden participar?</strong></h3>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
            <p style="
            font-family: " Open Sans", sans-serif; font-size: 12pt; font-weight: 400; line-height: 1.56;">
                <span>
                    La presente convocatoria está dirigida específicamente a las personas servidoras públicas que, por
                    diversos motivos no concluyeron el proceso de inscripción en los años 2017 y 2018; o bien, que
                    cuando desearon inscribirse ya no se abrieron nuevos espacios.
                </span>
            </p>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;" id="documentacion">
        <h3 style="font-weight: 200; font-size: 20pt; color:#000; font-family:" Open Sans", sans-serif;">
            <strong>¿Qué documentación se requiere?</strong></h3>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
            <ul style="list-style-type: square">
                <li>Acta de Nacimiento</li>
                <li>Clave Única de Registro de Población (CURP) (lo puedes descargar desde la página <a
                        href="https://www.gob.mx/curp/" target="_blank">https://www.gob.mx/curp</a>).</li>
                <li>Comprobante de Domicilio (no mayor a tres meses)</li>
                <li>Identificación Oficial vigente (INE)</li>
                <li>Último recibo de nómina (a la quincena vigente)</li>
                <li>Comprobante de estudios considerando que: </li>
                <ul>
                    <li><strong>Si deseas inscribirte a Bachillerato:</strong> Certificado total de estudios del
                        grado
                        Secundaria.</li>
                    <li><strong>Si deseas inscribirte a Licenciatura e Ingeniería:</strong> Certificado total de
                        estudios de
                        Bachillerato o equivalente.</li>
                    <li><strong>Si deseas inscribirte a Maestría:</strong> Título Profesional y/o Cédula Profesional
                        de
                        nivel superior.</li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <p>
            <strong>IMPORTANTE:</strong> La documentación debe enviarse digitalizada (escaneada) directamente del
            original en formato PDF
        </p>
    </div>
    <div class="row" style="margin-top: 30px;" id="criterios">
        <h3 style="font-weight: 200; font-size: 20pt; color:#000; font-family:" Open Sans", sans-serif;">
            <strong>¿Cuáles son los criterios de selección?</strong></h3>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="card border-light">
            <p>Personas servidoras públicas en activo en las Dependencias, Órganos Desconcentrados, Alcaldías y
                Entidades que:</p>
            <ol>
                <li>Hayan iniciado el trámite de inscripción en las convocatorias de 2017 y 2018, sin concluirlo,</li>
                <li>Se hayan registrado en la lista de espera en los Centros de Enlace a partir de septiembre de 2018 a
                    la fecha; o bien,</li>
                <li>Hayan solicitado inscribirse al programa por medio de oficio, a partir de septiembre de 2018.</li>
                <li>Tener 18 años cumplidos,</li>
                Además, deben:
                <li>Pertenecer al tipo de nómina 1, 4, 5 y 8 así como a los universos A, C, C1, D, O, P, Q, Q1, S, T y
                    V.</li>
                <li>No estar de licencia sin goce de sueldo o de comisión sindical</li>
                <li>No estar inscrito en el Programa de Retiro Voluntario o en trámites pre-jubilatorios.</li>
                <li>Contar con certificado de estudios del nivel anterior al que deseen inscribirse, señalado en la
                    sección anterior.</li>
            </ol>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="card border-light" align="center">
            <strong>***CUPO LIMITADO***</strong>
            <p>LOS LUGARES SE ASIGNARÁN POR ORDEN DE PRELACIÓN CONFORME SE VERIFIQUE QUE LA PERSONA CANDIDATA CUMPLE CON
                LOS REQUISITOS SEÑALADOS.</p>
        </div>
    </div>
</div>
@endsection