$(document).ready(function(){
    $('.modal-trigger').leanModal();
    //select de modal
    $('select').material_select();

    //eliminar empresa formulario
    $(".eliminar_empresa").click(function(event) {
    	event.preventDefault();
        var $empresa = $(this);
        var id_empresa = $empresa.data("id-empresa");
        if (parseInt(id_empresa) == 0) {
            Materialize.toast('La empresa no se pudo eliminar', 4000);
        } else {
            $.post('/admin/empresas/ajax_eliminar_empresa', {id_empresa: id_empresa},
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
    	var nombre_empresa = $("#nombre_empresa").val();
    	var id_tipo_empresa = $("#id_tipo_empresa").val();
    	if (nombre_empresa == "") {
    		Materialize.toast('Debes completar el nombre de la empresa', 4000);
	    	
    	} else {
    		$.post('/admin/empresas/ajax_agregar_empresa', {nombre_empresa: nombre_empresa,id_tipo_empresa: id_tipo_empresa},
	    	function(data) {
	    		console.log(data);
                if (parseInt(data) > 0) {
                    window.location.reload();
                }
	    	});
    	}
    });
}); //doc ready