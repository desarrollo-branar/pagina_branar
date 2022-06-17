$(document).on("ready",inicio);

function inicio(){
	$("span.help-block").hide();
	$("#enviar").click(validar);
	$("#nombre").keyup(validarNombre);
	$("#telefono").keyup(validarTelefono);
	$("#correo").keyup(validarCorreo);
}
function validar(){
	validarNombre();
	validarCorreo();
	validarTelefono();

}
function validarNombre(){
	var nombre = document.getElementById("nombre").value;
	//nombre
	if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
		$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#nombre").parent().children("span").text("Debe ingresar su nombre y apellido").show();
		$("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
	  	return false;
	}
	if( nombre.length < 5 ) {
		$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#nombre").parent().children("span").text("Debe ingresar su nombre y apellido correctamente").show();
		$("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
	  	return false;
	}
	else if( !isNaN(nombre) ) {
		$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-error has-feedback");
		$("#nombre").parent().children("span").text("No debe ingresar caracteres numéricos").show();
		$("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
	}
	else{
		$("#iconotexto").remove();
		$("#nombre").parent().parent().attr("class","form-group has-success has-feedback");
		$("#nombre").parent().children("span").text("").hide();
		$("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
	}
}
function validarTelefono(){
	var telefono = document.getElementById("telefono").value;
	//telefono
	if( telefono == null || telefono.length == 0 || /^\s+$/.test(telefono) ) {
		$("#iconotelefono").remove();
		$("#telefono").parent().parent().attr("class","form-group has-error has-feedback");
		$("#telefono").parent().children("span").text("Debe ingresar su telefono celular").show();
		$("#telefono").parent().append("<span id='iconotelefono' class='glyphicon glyphicon-remove form-control-feedback'></span>");
	  	return false;
	}
	if( telefono.length < 11 ) {
		$("#iconotelefono").remove();
		$("#telefono").parent().parent().attr("class","form-group has-error has-feedback");
		$("#telefono").parent().children("span").text("Número inválido, escriba correctamente su teléfono celular").show();
		$("#telefono").parent().append("<span id='iconotelefono' class='glyphicon glyphicon-remove form-control-feedback'></span>");
	  	return false;
	}
	else if( isNaN(telefono) ) {
		$("#iconotelefono").remove();
		$("#telefono").parent().parent().attr("class","form-group has-error has-feedback");
		$("#telefono").parent().children("span").text("Debe ingresar caracteres numéricos").show();
		$("#telefono").parent().append("<span id='iconotelefono' class='glyphicon glyphicon-remove form-control-feedback'></span>");
		return false;
	}
	else{
		$("#iconotelefono").remove();
		$("#telefono").parent().parent().attr("class","form-group has-success has-feedback");
		$("#telefono").parent().children("span").text("").hide();
		$("#telefono").parent().append("<span id='iconotelefono' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
	}
}
function validarCorreo(){
	var correo = document.getElementById("correo").value;
	var regex = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;
	//correo
	if( correo == null || correo.length == 0 || /^\s+$/.test(correo) ) {
		$("#iconocorreo").remove();
		$("#correo").parent().parent().attr("class","form-group has-error has-feedback");
		$("#correo").parent().children("span").text("Debe ingresar su correo electrónico").show();
		$("#correo").parent().append("<span id='iconocorreo' class='glyphicon glyphicon-remove form-control-feedback'></span>");
	  	return false;
	}
	if( correo.length < 5 ) {
		$("#iconocorreo").remove();
		$("#correo").parent().parent().attr("class","form-group has-error has-feedback");
		$("#correo").parent().children("span").text("Debe ingresar su correo correctamente").show();
		$("#correo").parent().append("<span id='iconocorreo' class='glyphicon glyphicon-remove form-control-feedback'></span>");
	  	return false;
	}
	if( !regex.test(correo) ) {
		$("#iconocorreo").remove();
		$("#correo").parent().parent().attr("class","form-group has-error has-feedback");
		$("#correo").parent().children("span").text("Correo inválido").show();
		$("#correo").parent().append("<span id='iconocorreo' class='glyphicon glyphicon-remove form-control-feedback'></span>");
	  	return false;
	}
	else{
		$("#iconocorreo").remove();
		$("#correo").parent().parent().attr("class","form-group has-success has-feedback");
		$("#correo").parent().children("span").text("").hide();
		$("#correo").parent().append("<span id='iconocorreo' class='glyphicon glyphicon-ok form-control-feedback'></span>");
		return true;
	}
}
