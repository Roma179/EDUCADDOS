function getCitas() {
    /* alert("hellow world!"); */
    $.ajax({
        type: 'GET',
        dataType: 'json',
        processData: false,
        contentType: false,
        url: url + 'get_citas',
        success: function (data) {
            /* console.log(data); */
            var citas = data;
            var citas_filter;
            citas.forEach(element => {
                citas_filter = element;
                citas_filter.forEach(element => {
                    if (element.status == '1') {
                        element.hora_cita = element.start;
                        element.hora_termino = element.end;
                    }
                });
            });
            var calendarEl = document.getElementById('calendar');
            var getHorariosDisponibles = function (getFecha) {
                var horarios = ['09:00:00', '09:30:00', '10:00:00', '10:30:00', '11:00:00', '11:30:00', '12:00:00', '12:30:00', '13:00:00', '13:30:00', '14:00:00', '14:30:00'];
                citas_filter.forEach(element => {
                    var hora;
                    var fecha_start = element.start.substring(0, 10);
                    if (fecha_start === getFecha) {
                        /* console.log(element.start); */
                        var fecha = element.start;
                        /* console.log(typeof(fecha)); */
                        hora = fecha.substring(11, 19);
                        for (let index = 0; index < horarios.length; index++) {
                            var element = horarios[index];
                            if (element === hora) {
                                horarios.splice(index, 1);
                            }
                        }
                    }
                });
                if (horarios.length >= 1) {
                    setHorariosDisponibles(horarios);
                } else {
                    $("#horario_select").attr("disabled", true);
                    Swal.fire({
                        icon: 'warning',
                        title: '¡Ya no hay horarios disponibles!',
                        text: 'Por favor elige otra fecha para su cita',
                        showConfirmButton: false,
                        timer: 5000,
                        allowOutsideClick: false
                    })
                }
            }
            var setHorariosDisponibles = function (horarios) {
                var selectHorario = $('#horario_select');
                selectHorario.attr("disabled", false);
                selectHorario.empty();
                for (let indexOption = 0; indexOption < horarios.length; indexOption++) {
                    var horarioDisponible = horarios[indexOption];
                    selectHorario.append($('<option></option>').val(horarioDisponible).html(horarioDisponible));
                }
            }
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es',
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
            /* console.log(calendar.getEventSources()); */
            calendar.on('dateClick', function (info) {
                const hoy = new Date();
                var now = formatoFecha(hoy, 'yy-mm-dd');
                /* var now = '2021-4-19'; */
                fechaArray = now.split("-");
                anio = fechaArray[0];
                mes = fechaArray[1];
                dia = fechaArray[2];
                mes = formatFecha(mes);
                dia = formatFecha(dia);
                /* console.log(anio+'-'+mes+'-'+dia); */
                now = anio + '-' + mes + '-' + dia;
                if (info.dateStr < now) {
                    Swal.fire({
                        icon: 'warning',
                        title: '¡La fecha ha caducado!',
                        text: 'Por favor elige la fecha de hoy o una posterior para su cita',
                        showConfirmButton: false,
                        timer: 5000,
                        allowOutsideClick: false
                    })
                } else {
                    $('#fecha_select').val(info.dateStr);
                    getHorariosDisponibles(info.dateStr);
                }
            });
            calendar.on('eventClick', function (info) {
                /* console.log(info.event); */
                if (info.event.extendedProps.status == '1' && info.event.extendedProps.asistio == '-1') {
                    var hora_cita = info.event.extendedProps.hora_cita;
                    var end_cita = info.event.extendedProps.hora_termino;
                    hora_cita = hora_cita.substring(11, 19);
                    end_cita = end_cita.substring(11, 19);
                    Swal.fire(
                        'Cita Reservada de las: ' + hora_cita + " a las " + end_cita,
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

function activarBoton() {
    var lista = document.getElementById("nivel_edu");
    var boton = document.getElementById("enviar_cita");
    if (lista.selectedIndex != 0)
        boton.disabled = false;
    else {
        boton.disabled = true;
        Swal.fire({
            icon: 'warning',
            title: 'Elegir un Nivel Academico',
            text: 'Debe seleccionar una opción',
            showConfirmButton: true
        });
    }
}

function formatFecha(fecha) {
    if (fecha.length == 1) {
        fecha = '0' + fecha;
    }
    return fecha;
}

function formatoFecha(fecha, formato) {
    const map = {
        dd: fecha.getDate(),
        mm: fecha.getMonth() + 1,
        yy: fecha.getFullYear(),
        yyyy: fecha.getFullYear()
    }

    return formato.replace(/dd|mm|yy|yyy/gi, matched => map[matched])
}

document.addEventListener('DOMContentLoaded', function () {
    getCitas();
});
