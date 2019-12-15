<?php

	require_once "conectar_db.php";
/* Aqui tenemos variables con un contenido que viene de un formulario d registro post si los campos son correctos se insertan en la base de datos y nos manda a la pagina de inicio de sesion de lo contrario nos vuelve a mandar a la pagina de registro.*/
	
	$tabla = "usuario";

	$nombreprod = $_POST["nombreprod"];
	$precioprod = $_POST["precioprod"];
	$unidadesprod = $_POST["unidadesprod"];
	$descripcionprod = $_POST["descripcionprod"];
	$imagenprod = $_POST["imagenprod"];
	$categoriaprod = $_POST["categoriaprod"];


	$sql = "INSERT INTO producto (Nombre, Precio, Unidades, Descripcion, Imagen, Categoria) VALUES(\"$nombreprod\",\"$precioprod\",\"$unidadesprod\",\"$descripcionprod\",\"$imagenprod\",\"$categoriaprod\")";

	if ($conn->query($sql)) {
		echo "Se han registrados los datos satisfactoriamente";
		header("Location: ../actualizar_paquetes.php");
	} else {
		echo "mal";
		header("Location: ../registrar_paquetes.php");
		
	}

?>