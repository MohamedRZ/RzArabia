<?php

	require_once "conectar_db.php";
/*Aqui tenemos variables variables que almacenan la sesion inicias y los datos mandado de la actualizacion de datos del post y modificamos los datos del usuario con un update con todos los campos modificados. Si los campos modificados se hacen correctamente se cierra la sesion y nos manda a la pagina de inicio sesion  y si no se cumple con los requisitos los vuelve a manda a la pagina de configuracion de usuario*/
	$usuarious = $_SESSION["Usuario_Nick"];
	$tabla = "usuario";

	$idA = $_POST["idA"];
	$usuarioA = $_POST["usuarioA"];
	$nombreA = $_POST["nombreA"];
	$apellidosA = $_POST["apellidoA"];
	$emailA = $_POST["emailA"];
	$rcontraA = MD5($_POST["rcontraA"]);
	$dniA = $_POST["dniA"];
	$telefonoA = $_POST["telefonoA"];
	$direccionA = $_POST["direccionA"];


	$actualizar = "UPDATE $tabla SET Nombre = \"$nombreA\", Apellido = \"$apellidosA\", Correo_Electronico = \"$emailA\", Contras = \"$rcontraA\", DNI = \"$dniA\", Telefono = \"$telefonoA\", Direccion = \"$direccionA\" WHERE Cliente_ID = \"$idA\"";

	if (mysqli_query($conn, $actualizar)) {
		session_start();
 		session_unset();
 		session_destroy();
		header("Location: http://localhost/proyecto_final/inicio_sesion.php");
	} else {
		header("Location: http://localhost/proyecto_final/configurar_usuario.php");
		
	}

?>