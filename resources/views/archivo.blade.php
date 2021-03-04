@extends('menu')
@section('title','Etapa 2: Curso de inducción')
@section('content')
<div class="container mt-5">
    <center>
        <h1>Pre-registro</h1>
    </center>

    <p><b>Favor de adjuntar los siguientes documentos:</b></p>
    <ul>
        <li>Acta de Nacimiento</li>
        <li>Clave Única de Registro de Población (CURP) (lo puedes descargar desde la página <a
                href="https://www.gob.mx/curp" target="_blank">
                <font color="#000000">https://www.gob.mx/curp</font>
            </a></li>
        <li>Comprobante de Domicilio (no mayor a tres meses),</li>
        <li>Identificación Oficial vigente (INE) ambos lados</li>
        <li>Último recibo de nómina (a la quincena vigente),</li>
    </ul>

    <div class="mt-2">


        <div class="card-primary" style="background-color:#F5FCFE;">
            <div class="row">
                <div class="col">
                    <h6>Acta de Nacimiento</h6>
                    <input type="file" id="filename_acta_nacimiento" name="filename_acta_nacimiento"
                        accept="application/msword, application/pdf">
                </div>
                <div class="col">
                    <h6>Clave Única de Registro de Población (CURP)</h6>
                    <input type="file" id="filename_curp" name="filename_curp"
                        accept="application/msword, application/pdf">
                </div>
            </div><br>
            <div class="row mt-2">
                <div class="col">
                    <h6>Comprobante de Domicilio</h6>
                    <input type="file" id="filename_comprobante_domicilio" name="filename_comprobante_domicilio"
                        accept="application/msword, application/pdf">
                </div>
                <div class="col">
                    <h6>Identificación Oficial</h6>
                    <input type="file" id="filename_ine" name="filename_ine"
                        accept="application/msword, application/pdf">
                </div>
            </div><br>
            <div class="row mt-2">
                <div class="col">
                    <h6>Último recibo de nómina:</h6>
                    <input type="file" id="filename_recibo_nomina" name="filename_recibo_nomina"
                        accept="application/msword, application/pdf">
                </div>

            </div>
        </div>
        <div class="mt-4">

            <div class="card-primary" style="background-color:#F5FCFE;">
                <div class="row">
                    <div class="col">
                        <h4>Seleccione el nivel de estudios al que desea inscribirse:</h4>
                        <select id="select" name="select" class="form-control">
                            <option value="value1">Elige</option>
                            <option value='bachillerato'>01_Bachillerato</option>
                            <option value='licenciatura_ingenieria'>02_Licenciatura o ingeniería</option>
                            <option value='maestria'>03_Maestría</option>
                        </select>

                        <div id="bachillerato" style="display:none;">

                            <h5>Certificado total de estudios del grado Secundaria (ambos lados)</h5>
                            <input type="file" id="filename_certificado_bachillerato"
                                name="filename_certificado_bachillerato" accept="application/msword, application/pdf">
                        </div>

                        <div id="carreras_licenciatura_ingenieria" style="display:none;">
                            <h5>Seleccione el plan de estudios que desea cursar</h5>
                            <select id="select" name="select" class="form-control">
                                <option value="value1">Elige</option>
                                <option id="contador_public" name="contador_public">Contador Público</option>
                                <option id="adm_empresa" name="adm_empresa">Administración de Empresas</option>
                                <option id="derecho" name="derecho">Derecho</option>
                                <option id="infor_adm" name="infor_adm">Informática Administrativa</option>
                                <option id="rh" name="rh">Recursos Humanos</option>
                                <option id="ciencias_educ" name="ciencias_educ">Ciencias de la Educación</option>
                                <option id="mercadotecnia" name="mercadotecnia">Mercadotecnia</option>
                                <option id="adm_financiera" name="adm_financiera">Administración Financiera</option>
                                <option id="derecho_economia" name="derecho_economia">Derecho con Acentuación en
                                    Economía</option>
                                <option id="derech_corporativo" name="derech_corporativo">Derecho Corporativo</option>
                                <option id="derech_finanzas" name="derech_finanzas">Derecho y Finanzas</option>
                                <option id="gestion_turistica" name="gestion_turistica">Gestión Turística</option>
                                <option id="merc_turistica" name="merc_turistica">Mercadotecnia Turística</option>
                                <option id="derech_lab" name="derech_lab">Derecho Laboral</option>
                                <option disabled><b>Ingeniería en:</b></option>
                                <option id="tec_comp" name="tec_comp">Tecnologías Computacionales</option>
                                <option id="indus_sistemas" name="indus_sistemas">Industrial y de Sistemas</option>
                                <option id="logistica" name="logistica">Logística</option>
                                <option id="gestion_empresarial" name="gestion_empresarial">Gestión Empresarial</option>
                            </select>
                            <h5>Certificado total de estudios de Bachillerato o equivalente.</h5>
                            <input type="file" id="filename_certificado_secundaria"
                                name="filename_certificado_secundaria" accept="application/msword, application/pdf">
                        </div>

                        <div id="maestria" style="display:none;">
                            <h5>Seleccione el plan de estudios que desea cursar</h5>
                            <select id="select" name="select" class="form-control">
                                <option value="value1">Elige</option>
                                <option id="administracion" name="administracion">Administración</option>
                                <option id="adm_ch" name="adm_ch">Administración del Capital Humano</option>
                                <option id="adm_finanzas" name="adm_finanzas">Administración y Finanzas</option>
                                <option id="adm_mercadotecnia" name="adm_mercadotecnia">Administración y Mercadotecnia
                                </option>
                                <option id="edu_tecnologia" name="edu_tecnologia">Educación con Acentuación en
                                    Tecnología Educativa</option>
                                <option id="maestria_derech" name="maestria_derech">Maestría en Derecho Laboral</option>
                            </select>

                            <h5>Título Profesional</br>
                                Cédula Profesional de nivel superior</h5>
                            <input type="file" id="filename_certificado_secundaria"
                                name="filename_certificado_secundaria" accept="application/msword, application/pdf">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
    $('#select').on('change',function(){
    var selectValor = ''+$(this).val();
    //alert (selectValor);

   if(selectValor == 'bachillerato'){
       // alert ('entrando al if');
        $("#bachillerato").css('display', 'block');
        $("#carreras_licenciatura_ingenieria").css('display', 'none')
        $("#maestria").css('display', 'none');
    }
    if(selectValor == 'licenciatura_ingenieria'){
        $("#bachillerato").css('display', 'none');
        $("#carreras_licenciatura_ingenieria").css('display', 'block');
        $("#maestria").css('display', 'none');
    }
    if(selectValor == 'maestria'){
        $("#bachillerato").css('display', 'none');
        $("#carreras_licenciatura_ingenieria").css('display', 'none');
        $("#maestria").css('display', 'block');
    }
       
    }); 
    
});
</script>

@endsection