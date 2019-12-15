/* Aqui tenemos un jquery que recoge la informacio de usuario y comprueba con 
un change si los dtos inteducido tecla por tecla estan en la base de datos y los manda
 con un get a la pagina php que enlaza con la mase de datos mysql */

$(document).ready(function(){
	$("#usuarioi").change(function(){

		var entrada = $("#usuarioi").val();


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
		xmlhttp.open("GET", "php/comprobar_inicio.php?q=" + entrada, true);
		xmlhttp.send();
	}

	})
})