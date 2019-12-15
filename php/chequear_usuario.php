<?php

require_once "conectar_db.php";
session_start();

/*Dos variables que almacenan el usuario y contraseña encriptada y comprueba si existen en la base de datos. Si es asi recoge el nombre y usuario de la base de datos y nos manda a la pagina principal de lo contrario nos manda a Inicio de sesion con el else*/

$usuarioch = $_POST['usuarioi'];
$contrach =$_POST['contrase'];

$econtrach = md5($contrach);

if ($usuarioch&&$econtrach) {

	$sql = "SELECT * FROM usuario WHERE Usuario_Nick='$usuarioch' AND Contras='$econtrach' ORDER BY Nombre ASC";

	$resultado = $conn->query($sql);

	if ($resultado->num_rows == 1) {

		while($row = $resultado->fetch_assoc()) {

			$nombre = $row["Nombre"];
			$clienteid = $row["Cliente_ID"];
			$rol = $row["Roll"];

		}

		$_SESSION ["Usuario_Nick"]=$usuarioch;
		$_SESSION ["Nombre"]=$nombre;
		$_SESSION ["Cliente_ID"]=$clienteid;
		$_SESSION ["Roll"]=$rol;
		

		header("Location: ../index.php");
	} else {
		header("Location: ../inicio_sesion.php");
	}
}

?>