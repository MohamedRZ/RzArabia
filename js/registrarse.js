/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
se almacena en el local storage */

$(document).ready(function(){
	$("#nombre").change(function(){

		var expreg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\'\s]*$/;
		var nom = $("#nombre").val();
		document.getElementById("errorNom").value;

		if (!expreg.test(nom)) {
			document.getElementById("errorNom").innerHTML = "-> El Nombre no es correcto.";
		}
		else {
			localStorage.setItem("Nombre", nom);
			document.getElementById("errorNom").innerHTML = ""

		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
se almacena en el local storage */

$(document).ready(function(){
	$("#apellido").change(function(){

		var expreg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\'\s]*$/;
		var ape = $("#apellido").val();
		document.getElementById("errorApe").value;

		if (!expreg.test(ape)) {
			document.getElementById("errorApe").innerHTML = "-> El Apellido no es correcto.";
			$("#apellido").focus();
		}
		else {
			localStorage.setItem("Apellido", ape);
			document.getElementById("errorApe").innerHTML = ""
		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
se almacena en el local storage */

$(document).ready(function(){
	$("#usuarior").change(function(){

		var expreg = /^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ]+[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ\.\-\_]*$/;
		var usua = $("#usuarior").val();
		document.getElementById("errorUsu").value;

		if (!expreg.test(usua)) {
			document.getElementById("errorUsu").innerHTML = "-> No puede empezar por carácteres especiales ni contener espacios.";
			$("#usuarior").focus();
		}
		else {
			localStorage.setItem("Usuario", usua);
			document.getElementById("errorUsu").innerHTML = ""
		}
	})
})



/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
se almacena en el local storage */

$(document).ready(function(){
	$("#email").change(function(){

		var expreg = /^[a-zA-Z]+[a-zA-Z0-9\.\-\_]+@[a-z|A-Z|0-9]+\.([a-z|A-Z]{2,4})$/;
		var ema = $("#email").val();
		document.getElementById("errorEma").value;

		if (!expreg.test(ema)) {
			document.getElementById("errorEma").innerHTML = "-> El correo electrónico no es correcto.";
		}
		else {
			localStorage.setItem("CorreoElectronico", ema);
			document.getElementById("errorEma").innerHTML = ""
		}
	})
})
/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
no nos muestra ningun mensaje */

$(document).ready(function(){
	$("#contra").change(function(){

		var expreg = {min:6};
		var con = $("#contra").val();
		document.getElementById("errorCon").value;

		if (con.length < expreg.min) {
			document.getElementById("errorCon").innerHTML = "-> La contraseña no cumple el mínimo de caracteres.";
			$("#contra").val("");
		}
		else {
			document.getElementById("errorCon").innerHTML = ""
		}
	})
})
/* Este jquery comprueba que las dos contraseñas introducidas son iguales
Si las contraseñas son correctas no nos muestra ningun mensaje de lo contrario
Nos muestra el mensaje de error */

$(document).ready(function(){
	$("#rcontra").change(function(){

		var con = $("#contra").val();
		var conr = $("#rcontra").val();
		document.getElementById("errorConR").value;

		if (con === conr) {
			document.getElementById("errorConR").innerHTML = ""
		}
		else {
			document.getElementById("errorConR").innerHTML = "-> Las contraseñas no coinciden.";
			$("#rcontra").val("");
			$("#rcontra").focus();
		}
	})
})

/*Aqui tenemos un jquery que recoger los datos introducidos del dni
y realiza una operacion de calculo para comprobar que es correcta y que 
la letra introducida es la correcta mostrando los respectivos mensajes segun 
lo que suceda */

$(document).ready(function(){
	$("#dni").change(function(){

		var dnii = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
		var dni = $("#dni").val();
		document.getElementById("errorDni").value;

		dninum = dni.substring(0, 7);
		dnilet = dni.substring(8);

		dnilet = dnilet.toUpperCase();
		dninumm = parseInt(dni);

		if(dninumm < 0 || dninumm > 99999999) {

			document.getElementById("errorDni").innerHTML = "-> El número proporcionado no es válido.";
		}

		else {
			var letraCalculada = dnii[dninumm % 23];
			if(letraCalculada != dnilet) {

				document.getElementById("errorDni").innerHTML = "-> La letra o el número proporcionados no son correctos.";

			}
			else {
				localStorage.setItem("DNI", dni);
				document.getElementById("errorDni").innerHTML = ""
			}
		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
no nos muestra ningun mensaje */

$(document).ready(function(){
	$("#telefono").change(function(){

		var expreg = /^[0-9]+$/;
		var expre = {min:9};
		var tel = $("#telefono").val();
		document.getElementById("errorTel").value;

		if (!expreg.test(tel)) {
			document.getElementById("errorTel").innerHTML = "-> El numero no es correcto.";
		}	
		else if (tel.length < expre.min) {
			document.getElementById("errorTel").innerHTML = "-> Faltan digitos en el numero.";
		}
		else {
			localStorage.setItem("Telefono", tel);
			document.getElementById("errorTel").innerHTML = ""
		}
	})
})

/* Aqui tenemos un jquery que recoge la informacio de usuario y comprueba con 
un change si los dtos inteducido tecla por tecla estan en la base de datos y los manda
 con un get a la pagina php que enlaza con la mase de datos mysql */
 
$(document).ready(function(){
	$("#usuarior").change(function(){

		var entrada = $("#usuarior").val();


		if (entrada.length == 0) {
		document.getElementById("usuariorr").innerHTML = "";
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("usuariorr").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "php/ComprobarUsuario.php?q=" + entrada, true);
		xmlhttp.send();
	}

	})
})




