function mostrarListadoEventos(nroPagina){
    //console.log(nroPagina);    

    $.ajax({
        type: "POST",
        url: "vistas/listadoEventos.php",
        data : {
            'pagina' : nroPagina            
        },
        success:function(r){
            $('#main-container').html(r);
        }
    });
}