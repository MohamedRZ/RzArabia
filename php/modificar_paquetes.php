<?php

	require_once "conectar_db.php";
/*Aqui tenemos variables variables que almacenan la sesion inicias y los datos mandado de la actualizacion de datos del post y modificamos los datos del usuario con un update con todos los campos modificados. Si los campos modificados se hacen correctamente se cierra la sesion y nos manda a la pagina de inicio sesion  y si no se cumple con los requisitos los vuelve a manda a la pagina de configuracion de usuario*/
	$usuarious = $_SESSION["Usuario_Nick"];
	$tabla = "producto";

	$idP = $_POST["idp"];
	$nombreP = $_POST["nombrep"];
	$precioP = $_POST["preciop"];
	$unidadesP = $_POST["unidadesp"];
	$descripcionP = $_POST["descripcionp"];
	$categoriaP = $_POST["categoriap"];


	$actualizarp = "UPDATE producto SET Nombre = \"$nombreP\", Precio = \"$precioP\", Unidades = \"$unidadesP\", Descripcion = \"$descripcionP\", Categoria = \"$categoriaP\" WHERE Producto_ID = \"$idP\"";

	if (mysqli_query($conn, $actualizarp)) {
		header("Location: http://localhost/proyecto_final/actualizar_paquetes.php");
	} else {
		header("Location: http://localhost/proyecto_final/configurar_usuario.php");
		
	}

?>