$(document).ready(function () {
    $("#rol").blur(function () {
        var rol = $("#rol").val();
        switch (rol) {
            case 'super_educad':
                $('#email').val('supereducad@finanzas.cdmx.gob.mx');
                break;
            case 'educad':
                $('#email').val('educad@finanzas.cdmx.gob.mx');
                break;
        }
        //alert(rol);
    });
});
