<?php

/*El requiere establece conexion con el ruta php establecida*/
	require_once "conectar_db.php";
	/*Sesion Start almacena la sesion en la que se inicia*/
	session_start();
/*Aqui tenemos una variable con el nombre de la tabla otra tres con el contenido del formulario con el nombre destino y comentario y los insertamos con un insert para que se almacene en nuestra base de datos.*/
	
	if(isset($_GET['ident'])){

		$id = $_GET['ident'];
	};

	$tabla = "comentario";

	$clienteidE = $_SESSION['Cliente_ID'];
	$productoEE = $_POST["productoE"];
	$comentarioE = $_POST["comentarioE"];

	echo $clienteidE;
	echo $destinoEE;
	echo $comentarioE;


	$sql = "INSERT INTO $tabla (Usuario_Cliente_ID, Producto_Producto_ID, Descripcion) VALUES('$clienteidE','$id','$comentarioE')";
	if (mysqli_query($conn, $sql)) {
		header("Location: ../index.php");
	} else {
		header("Location: ../realizar_comentario.php");
		
	}

?>