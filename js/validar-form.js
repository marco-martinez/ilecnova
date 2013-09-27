function validar_form(){

var nombre = document.getElementById("nombre").value;
var apellidos = document.getElementById("apellidos").value;
var email = document.getElementById("email").value;
var telefono = document.getElementById("telefono").value;
var mensaje = document.getElementById("mensaje").value;
var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(nombre.length == 0 || apellidos.length == 0 || email.length ==0 || telefono.length == 0 || mensaje.length == 0){
		document.getElementById("p_error").innerHTML='Los campos marcados no pueden ir vácios';
		document.getElementById("div_error").style.display='block';
		return false;
		}else if(isNaN(telefono)){
			document.getElementById("p_error").innerHTML='Teléfono solo acepta 10 números sin espacios';
			document.getElementById("div_error").style.display='block';
			 return false;
		}else if(!expr.test(email)){
			document.getElementById("p_error").innerHTML='Por favor ingrese un correo válido';
			document.getElementById("div_error").style.display='block';
			return false;
		}else{
		 return true;
		}

}