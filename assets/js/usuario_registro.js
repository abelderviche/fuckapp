$(document).ready(function() {
	$("#modulo_registro").hide();
	$("#ver_login, #ver_registro").click(function(event) {
		event.preventDefault();
		$("#modulo_login, #modulo_registro").toggle();
		$("#ver_login, #ver_registro").toggleClass('activo');
	});
});