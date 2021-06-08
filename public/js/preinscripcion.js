
function valida_pre() {
    var rfc = $("#rfc").val();

    if (rfc !== '') {
        alert("so puedes inscribir");
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "rfc": rfc,
            },
            url: url + 'guardar_pre-registro',
            success: function (data) {
                console.log(data);
                location.href = url + 'Infpreinscripcion';
                alert("Los Datos se Insertaron Correctamente"); 
            },
            error: function (data_e) {
                console.log(data_e);
                alert("No se pudo inscribir");
            }
    
        });
    } else {
        Swal.fire({
            icon: 'warning',
            title: 'Ingresa RFC',
            showConfirmButton: false,
            timer: 2000,
            allowOutsideClick: false
        })
    }
}
