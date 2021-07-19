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
                    Personas servidoras públicas mayores de 18 años, con antigüedad de seis meses y un día en el puesto
                    actual, de
                    base con o sin dígito sindical o bien, de estructura que cumplan con los <a style="margin-top: 0;
                    margin-bottom: 0;
                    display: inline;
                    overflow-wrap: break-word;
                    overflow: hidden;
                    text-decoration: underline;" href="#criterios">criterios de selección</a>
                    señalados en la
                    presente convocatoria.
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
            <ul>
                <li>Ser mayor de 18 años.</li>
                <li>Antigüedad de seis meses y un día en el puesto actual.</li>
                <li>Ser personal de base con, o sin, dígito sindical.</li>
                <li>Ser personal de estructura.</li>
                <li>Pertenecer exclusivamente al tipo de nómina 1 (base), 4 (haberes) y 5 (lista de raya).</li>
                <li>Pertenecer exclusivamente a los universos: A, C, C1, D, DO, G, GS, J, K, L, M, O, P, Q, Q1, S, T, V.</li>
                <li>Estar adscrito en una Unidad Administrativa que cuente con el presupuesto para la asignación del apoyo académico.</li>
                <li>No haber tramitado baja voluntaria del programa Universidad Laboral en Línea del Gobierno de la Ciudad de México “UNILAB”.</li>
                <li>No tramitar ni contar con licencia sin goce de sueldo.</li>
                <li>No tramitar ni estar de comisión sindical.</li>
                <li>No estar inscrito en el Programa de Retiro Voluntario o en trámites de jubilación.</li>
            </ul>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="card border-light" align="center">
            <strong>***CUPO LIMITADO***</strong>
            <p>LOS LUGARES SE ASIGNARÁN POR ORDEN DE PRELACIÓN CONFORME SE VERIFIQUE QUE LA PERSONA CANDIDATA CUMPLE CON
                LOS REQUISITOS SEÑALADOS SEGÚN EL NÚMERO DE LUGARES DISPONIBLES EN CADA UNIDAD ADMINISTRATIVA.</p>
        </div>
    </div>
</div>
@endsection