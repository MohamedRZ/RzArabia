/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
se almacena en el local storage */

$(document).ready(function(){
	$("#nombreA").change(function(){

		var expreg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\'\s]*$/;
		var nom = $("#nombreA").val();
		document.getElementById("errorNomA").value;

		if (!expreg.test(nom)) {
			document.getElementById("errorNomA").innerHTML = "-> El Nombre no es correcto.";
		}
		else {
			localStorage.setItem("NombreA", nom);
			document.getElementById("errorNomA").innerHTML = ""

		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
se almacena en el local storage */

$(document).ready(function(){
	$("#apellidoA").change(function(){

		var expreg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\'\s]*$/;
		var ape = $("#apellidoA").val();
		document.getElementById("errorApeA").value;

		if (!expreg.test(ape)) {
			document.getElementById("errorApeA").innerHTML = "-> El Apellido no es correcto.";
			$("#apellidoA").focus();
		}
		else {
			localStorage.setItem("ApellidoA", ape);
			document.getElementById("errorApeA").innerHTML = ""
		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
se almacena en el local storage */

$(document).ready(function(){
	$("#emailA").change(function(){

		var expreg = /^[a-zA-Z]+[a-zA-Z0-9\.\-\_]+@[a-z|A-Z|0-9]+\.([a-z|A-Z]{2,4})$/;
		var ema = $("#emailA").val();
		document.getElementById("errorEmaA").value;

		if (!expreg.test(ema)) {
			document.getElementById("errorEmaA").innerHTML = "-> El correo electrónico no es correcto.";
		}
		else {
			localStorage.setItem("CorreoElectronicoA", ema);
			document.getElementById("errorEmaA").innerHTML = ""
		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
no nos muestra ningun mensaje */

$(document).ready(function(){
	$("#contraA").change(function(){

		var expreg = {min:6};
		var con = $("#contraA").val();
		document.getElementById("errorConA").value;

		if (con.length < expreg.min) {
			document.getElementById("errorConA").innerHTML = "-> La contraseña no cumple el mínimo de caracteres.";
			$("#contraA").val("");
		}
		else {
			document.getElementById("errorConA").innerHTML = ""
		}
	})
})

/* Este jquery comprueba que las dos contraseñas introducidas son iguales
Si las contraseñas son correctas no nos muestra ningun mensaje de lo contrario
Nos muestra el mensaje de error */

$(document).ready(function(){
	$("#rcontraA").change(function(){

		var con = $("#contraA").val();
		var conr = $("#rcontraA").val();
		document.getElementById("errorConRA").value;

		if (con === conr) {
			document.getElementById("errorConRA").innerHTML = ""
		}
		else {
			document.getElementById("errorConRA").innerHTML = "-> Las contraseñas no coinciden.";
			$("#rcontraA").val("");
			$("#rcontraA").focus();
		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
no nos muestra ningun mensaje */

$(document).ready(function(){
	$("#cuentaA").change(function(){

		var expreg = /[A-Z]{2}-[0-9]{4}-[0-9]{2}-[0-9]{6}$/;
		var cue = $("#cuentaA").val();
		document.getElementById("errorCuenA").value;

		if (!expreg.test(cue)) {
			document.getElementById("errorCuenA").innerHTML = "-> El número de cuenta no es válido.";
		}
		else {
			localStorage.setItem("CuentaBancariaA", cue);
			document.getElementById("errorCuenA").innerHTML = ""
		}
	})
})

/*Aqui tenemos un jquery que recoger los datos introducidos del dni
y realiza una operacion de calculo para comprobar que es correcta y que 
la letra introducida es la correcta mostrando los respectivos mensajes segun 
lo que suceda */

$(document).ready(function(){
	$("#dniA").change(function(){

		var dnii = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
		var dni = $("#dniA").val();
		document.getElementById("errorDniA").value;

		dninum = dni.substring(0, 7);
		dnilet = dni.substring(8);

		dnilet = dnilet.toUpperCase();
		dninumm = parseInt(dni);

		if(dninumm < 0 || dninumm > 99999999) {

			document.getElementById("errorDniA").innerHTML = "-> El número proporcionado no es válido.";
		}

		else {
			var letraCalculada = dnii[dninumm % 23];
			if(letraCalculada != dnilet) {

				document.getElementById("errorDniA").innerHTML = "-> La letra o el número proporcionados no son correctos.";

			}
			else {
				localStorage.setItem("DNIA", dni);
				document.getElementById("errorDniA").innerHTML = ""
			}
		}
	})
})

/* Aqui tenemos un jquery que recoge y comprueba la informacion que nos manda 
de la pagina de registro y valida que conicidan con la variable Expreg si no son
correctos nos muestra un mensaje con el error correspondiente de lo contrario
no nos muestra ningun mensaje */

$(document).ready(function(){
	$("#telefonoA").change(function(){

		var expreg = /^[0-9]+$/;
		var expre = {min:9};
		var tel = $("#telefonoA").val();
		document.getElementById("errorTelA").value;

		if (!expreg.test(tel)) {
			document.getElementById("errorTelA").innerHTML = "-> El numero no es correcto.";
		}	
		else if (tel.length < expre.min) {
			document.getElementById("errorTelA").innerHTML = "-> Faltan digitos en el numero.";
		}
		else {
			localStorage.setItem("TelefonoA", tel);
			document.getElementById("errorTelA").innerHTML = ""
		}
	})
})