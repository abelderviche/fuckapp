$(document).ready(function(){
     $('.modal-trigger').leanModal();

    //eliminar empresa formulario
    $(".eliminar_empresa").click(function(event) {
    	event.preventDefault();
        var $empresa = $(this);
        var id_empresa = $empresa.data("id-palabra");
        if (parseInt(id_empresa) == 0) {
            Materialize.toast('El Tipo de Empresa no se pudo eliminar', 4000);
        } else {
            $.post('/admin/palabras/ajax_eliminar_palabra', {id_palabra: id_empresa},
            function(data) {
                if (parseInt(data) > 0) {
                    $empresa.fadeOut(750,"easeOutQuad",function() {
                        $empresa.remove();
                    });
                }
            }); 
        } 
       
    });
    //agrega empresa boton modal
    $(".modal-action-done").click(function(event) {
    	event.preventDefault();
    	var palabra = $("#palabra").val();
    	if (palabra == "") {
    		Materialize.toast('Debes completar la palabra', 4000);
	    	
    	} else {
    		$.post('/admin/palabras/ajax_agregar_palabra', {palabra: palabra},
	    	function(data) {
	    		console.log(data);
                if (parseInt(data) > 0) {
                    window.location.reload();
                }
	    	});
    	} 
    });
}); //doc ready