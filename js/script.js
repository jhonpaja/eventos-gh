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

function detalleEvento(id){
    console.log('detalleEvento()');
    $.ajax({
        type: "POST",
        url: "vistas/detalleEvento.php",
        data : {
            "id": id
        },
        success:function(r){
            $('#main-container').html(r);
        }
    });
}