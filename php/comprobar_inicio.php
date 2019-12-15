<?php

/*Este programa comprueba si el usuario introducido en el campo usuario existe en la tabla si es asi nos muestra una imagen con una V que informa al usuario que ese nombre de usuario ya es correcto para proceder con el login de lo contrario nos muestra una imagen con una X que nos dice que el usuario introducido no existe*/

	require_once "conectar_db.php";

	$patron = $_GET['q'];

	$sql = "SELECT * FROM usuario WHERE Usuario_Nick LIKE '$patron%' ORDER BY Usuario_Nick ASC";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {

			echo "<span id='verde'><img src='imagenes/boton_correcto.png' style='width: 30px; margin-left: 1%;'</span>";
		}
	} else {
		
		echo "<span id='rojo'><img src='imagenes/boton_error.png' style='width: 30px; margin-left: 1%;'</span>";
		
	}
	$conn->close();
?>