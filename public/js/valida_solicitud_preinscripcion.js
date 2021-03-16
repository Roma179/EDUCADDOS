function validar_solicitud(estado_solicitud) {
    
    var id_empleado = $('#id_empleado').val();
    $.ajax({
        
        type: 'POST',
        dataType: 'json',
        data: {
                "_token":$("meta[name='csrf-token']").attr("content"),
                "is_solicitud_aceptada":estado_solicitud,
                "id":id_empleado                      
              },
        url:url+'accept_solicitud',
        success: function(data) 
        { 
            /* swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
                )         */         
                alert("La Solicitud se Valido Correctamente");
        },
        error: function(data_e)
         {
            console.log(data_e);
            alert("Error al Validar Solicitud");
         }
    });
    
    
}