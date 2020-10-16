

  jQuery(document).on('submit','#formlgp', function(event){
    event.preventDefault();

   jQuery.ajax({
        type: 'POST',
        url: 'log.php',
        data: $(this).serialize(),
        dataType: 'json' ,
        beforeSend: function(){
            $('.btnlgp').val('validando...');
        }
    })
    .done(function(respuesta) {
        console.log(respuesta);
        if (!respuesta.error){
            if (respuesta.tipo == 'Admin'){
                location.href = 'adm.php';
            }else if(respuesta.tipo == 'Doc'){
                location.href = 'docentes.html';
            }else if(respuesta.tipo == 'Alumn'){
                location.href = 'index3.html';
            }
        }else {
            $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },3000);
            $('.btnlgp').val('Ingresar');
        }
    })
    .fail(function(resp) {
        console.log(resp.responseText);
    })
    .always(function() {
        console.log("complete");
    });

    
});