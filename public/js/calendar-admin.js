function getCitas() {
    /* alert("hellow world!"); */
    $.ajax({
        type: 'GET',
        dataType: 'json',
        processData: false,
        contentType: false,
        url: url + 'get_citas_admin',
        success: function (data) {
            var citas = data;
            var citas_filter;
            citas.forEach(element => {
                citas_filter = element;
                citas_filter.forEach(element => {
                    if (element.status == '-1' && element.asistio == '-1') {
                        element.title = "Caducado " + element.rfc;
                    } else if (element.status == '1') {
                        element.title = element.title + " " + element.rfc;
                        element.hora_cita = element.start;
                        element.hora_termino = element.end;
                        element.nivel_educativo = element.nivel_educativo_id;
                    }
                });
            });
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es',
                selectable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                initialView: 'dayGridMonth',
                scrollTime: '08:00', // undo default 6am scrollTime
                headerToolbar: {
                    left: 'today prev,next',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                events: citas_filter,
                eventColor: '#F32736'
            });
            calendar.on('eventClick', function (info) {
                /* console.log(info.event); */
                if (info.event.extendedProps.status == '-1' && info.event.extendedProps.asistio == '-1') {
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    })
                    swalWithBootstrapButtons.fire({
                        title: '¿El Usuario asistio a la cita?',
                        text: "Una vez confirmado ya no se podra revertir los cambios",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, Asistio',
                        cancelButtonText: 'Penalizar!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setAsistencia(info.event.id);
                        } else if (
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            penalizar(info.event.id);
                        }
                    });
                } else if (info.event.extendedProps.status == '1' && info.event.extendedProps.asistio == '-1') {
                    var hora_cita = info.event.extendedProps.hora_cita;
                    var end_cita = info.event.extendedProps.hora_termino;
                    var id_nivel = info.event.extendedProps.nivel_educativo_id;                    
                    var nivel = getNivelEducativo(id_nivel);
                    hora_cita = hora_cita.substring(11, 19);
                    end_cita = end_cita.substring(11, 19);
                    Swal.fire(
                        'Usuario: ' + info.event.extendedProps.rfc,
                        'Cita Reservada para '+ nivel +' de las: ' + hora_cita + " a las " + end_cita,
                        'info'
                    )
                }
            });
            calendar.render();
        },
        error: function (data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
}

function getNivelEducativo(id_nivel){
    if(id_nivel === 1){
        return nivel = 'Bachillerato';
    }else if(id_nivel === 2){
        return nivel = 'Licenciatura';
    }else if(id_nivel === 3){
        return nivel = 'Maestria';
    }
}

function setAsistencia(id_cita) {
    var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
    form_data.append("id_cita", id_cita);
    $.ajax({
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        data: form_data,
        url: url + 'set_asistencia',
        success: function (data) {
            /* console.log(data); */
            Swal.fire({
                icon: 'info',
                title: '¡Éxito!',
                text: 'Los cambios se han realizado.',
                showCancelButton: false,
                showConfirmButton: true,
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    getCitas();
                }
            });
        },
        error: function (data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
}

function penalizar(id_cita) {
    var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
    form_data.append("id_cita", id_cita);
    $.ajax({
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        data: form_data,
        url: url + 'set_penalizar',
        success: function (data) {
            /* console.log(data); */
            Swal.fire({
                icon: 'info',
                title: '¡Penalizado!',
                text: 'El usuario despues de 3 dias habiles podra registrar una nueva cita',
                showCancelButton: false,
                showConfirmButton: true,
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    getCitas();
                }
            });
        },
        error: function (data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    getCitas();
});
