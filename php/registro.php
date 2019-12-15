<?php

	require_once "conectar_db.php";
/* Aqui tenemos variables con un contenido que viene de un formulario d registro post si los campos son correctos se insertan en la base de datos y nos manda a la pagina de inicio de sesion de lo contrario nos vuelve a mandar a la pagina de registro.*/
	
	$tabla = "usuario";

	$usuarior = $_POST["usuarior"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["email"];
	$rcontra = MD5($_POST["rcontra"]);
	$dni = $_POST["dni"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];


	$sql = "INSERT INTO usuario (Usuario_Nick, Nombre, Apellido, Correo_Electronico, Contras, DNI, Telefono, Direccion) VALUES(\"$usuarior\",\"$nombre\",\"$apellido\",\"$email\",\"$rcontra\",\"$dni\",\"$telefono\",\"$direccion\")";

	if ($conn->query($sql)) {
		echo "Se han registrados los datos satisfactoriamente";
		header("Location: ../inicio_sesion.php");
	} else {
		echo "mal";
		header("Location: ../registrarse.php");
		
	}

?>