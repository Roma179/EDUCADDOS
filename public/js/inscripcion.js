function preinscripcion() {
    /* alert("Hola"); */
    var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
    form_data.append("nombre", $("#nombre").val());
    form_data.append("ape_paterno", $("#ape_paterno").val());
    form_data.append("ape_materno", $("#ape_materno").val());
    form_data.append("id_empleado", $("#id_empleado").val());
    form_data.append("tipo_nomina", $("#tipo_nomina").val());
    form_data.append("universo_nominal", $("#universo_nominal").val());
    form_data.append("id_unidad_administrativa", $("#id_unidad_administrativa").val());
    form_data.append("unidad_administrativa", $("#unidad_administrativa").val());

    form_data.append("id_sector", $("#id_sector").val());
    form_data.append("sector", $("#sector").val());
    form_data.append("sector_pago", $("#sector_pago").val());
    form_data.append("nivel_salarial", $("#nivel_salarial").val());
    form_data.append("seccion_sindical", $("#seccion_sindical").val());
    form_data.append("calle", $("#calle").val());
    form_data.append("numero_ext", $("#numero_ext").val());
    form_data.append("numero_int", $("#numero_int").val());
    form_data.append("codigo_postal", $("#codigo_postal").val());
    form_data.append("colonia", $("#colonia").val());
    form_data.append("alcaldia", $("#alcaldia").val());
    form_data.append("estado", $("#estado").val());
    form_data.append("pais", $("#pais").val());
    form_data.append("correo_electro", $("#correo_electro").val());
    form_data.append("telefono_uno", $("#telefono_uno").val());
    form_data.append("telefono_dos", $("#telefono_dos").val());
    form_data.append("telefono_tres", $("#telefono_tres").val());
    form_data.append("is_solicitud_aceptada", "Por Validar");
    form_data.append("status_empleado", $("#status_empleado").val());
    form_data.append("extension", $("#extension").val());
    
    var dato_archivo_act = $('#filename_act').prop("files")[0];
    var dato_archivo_curp = $('#filename_curp').prop("files")[0];
    var dato_archivo_comp_dom = $('#filename_domicilio').prop("files")[0];
    var dato_archivo_ine = $('#filename_ine').prop("files")[0];
    var dato_archivo_nomi = $('#filename_recibo').prop("files")[0];
    var dato_archivo_cert_secu = $('#filename_secundaria').prop("files")[0];
    var dato_archivo_cert_bachi = $('#filename_bachillerato').prop("files")[0];
    var dato_archivo_cert_maestria = $('#filename_certificado_maestria').prop("files")[0];

    if (dato_archivo_cert_secu !== undefined) {
        form_data.append("filename_certif_estudio", dato_archivo_cert_secu);
        form_data.append("nivel_escol", $("#select_nivel_escol").val());
        form_data.append("escolaridad", '');
    }
    if (dato_archivo_cert_bachi !== undefined) {
        form_data.append("filename_certif_estudio", dato_archivo_cert_bachi);
        form_data.append("nivel_escol", $("#select_nivel_escol").val());
        form_data.append("escolaridad", $("#select_lic").val());
    }
    if (dato_archivo_cert_maestria !== undefined) {
        form_data.append("filename_certif_estudio", dato_archivo_cert_maestria);
        form_data.append("nivel_escol", $("#select_nivel_escol").val());
        form_data.append("escolaridad", $("#select_maestria").val());
    }
    
    form_data.append("filename_acta_nacimiento", dato_archivo_act);
    form_data.append("filename_curp", dato_archivo_curp);
    form_data.append("filename_comprobante_domicilio", dato_archivo_comp_dom);
    form_data.append("filename_ine", dato_archivo_ine);
    form_data.append("filename_recibo_nomina", dato_archivo_nomi);

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'guardar_preinscripcion',
        success: function (data) {
            //console.log(data);
            if (data.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'Su solicitud se ha registrado en el sistema',
                    showConfirmButton: false,
                    timer: 5000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        /* $("#new_reminder").modal("hide"); */
                        location.href = url + 'pre-registro';
                        //document.getElementById("regForm").submit();
                    }
                });
            } else {
                if (data.err_valid_docs) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Documentos, Validaciones!',
                        text: data.result,
                        showConfirmButton: false,
                        timer: 20000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'pre-registro';
                        }
                    });
                    return;
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error de Sistema!',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 20000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'pre-registro';
                    }
                });
            }
            //alert("Los Datos se Consultaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        } 
    });
}

function createUsuario() {
    var name = $("#name").val();
    var email = $("#email").val();
    var rol = $("#rol").val();
    var password = $("#password").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "name": name,
            "email": email,
            "rol": rol,
            "password": password
        },
        url: url + 'store',
        success: function (data) {
            console.log(data);
            alert("Los Datos se Insertaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            alert("No se pudo inscribir");
        }

    });
}

function editUsuario(id) {
    //alert(id);
    var name = $("#name").val();
    var email = $("#email").val();
    var rol = $("#rol").val();
    var password = $("#password").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "id": id,
            "name": name,
            "email": email,
            "rol": rol,
            "password": password
        },
        url: url + 'update',
        success: function (data) {
            console.log(data);
            alert("Los Datos se Actualizaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            alert("No se pudo Actualizar");
        }

    });
}

function createRol() {
    var name = $("#name").val();
    var permissions = $("#permissions").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "name": name,
            "permissions": permissions
        },
        url: url + 'guardar_rol',
        success: function (data) {
            console.log(data);
            alert("Los Datos se Insertaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            alert("No se pudo inscribir");
        }

    });
}

/***Funcion para edicion de un cliente**/
function editCaci(id, caci) {
    //alert(caci);
    var position_caci = null;
    $("#id_caci").val(id);
    $('#caciEdit').modal('show');

    switch (caci) {
        case 'Luz Maria Gomez Pezuela':
            position_caci ='0';
            break;
        case 'Mtra Eva Moreno Sanchez':
            position_caci ='1';
            break;
        case 'Bertha Von Glumer Leyva':
            position_caci ='2';
            break;
        case 'Carolina Agazzi':
            position_caci ='3';
            break;
        case 'Carmen S':
            position_caci ='4';
            break;
    }
    getIndexCaci(position_caci);
}

function getIndexCaci(position_caci) {
    document.getElementById("caci_nombre").selectedIndex = position_caci; 
}

function actualizarCaci(token) {
    var id_caci = $("#id_caci").val();
    var caci_nombre = $("#caci_nombre").val();
    var tramite = $("#tramite").val();

    /* alert(id_caci); */
    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: {
            "_token": token,
            "id": id_caci,
            "caci_nombre": caci_nombre,
            "tramite": tramite,
        },
        url: url + 'actualizar_caci',
        success: function (data) {
            if (data.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'Actualización',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 5000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#caciEdit").modal("hide");
                        if (data.caci === 'inscripcion') {
                            location.href = url + 'lista_inscripcion';
                        } else if (data.caci === 'reinscripcion') {
                            location.href = url + 'lista_reinscripcion';
                        }
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: '¡Error de Sistema!',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 5000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#caciEdit").modal("hide");
                        if (data.caci === 'inscripcion') {
                            location.href = url + 'lista_inscripcion';
                        } else if (data.caci === 'reinscripcion') {
                            location.href = url + 'lista_reinscripcion';
                        }
                    }
                });
            }
        },
        error: function (data_e) {
            console.log(data_e);
        }
    });
}
