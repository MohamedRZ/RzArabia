<?php

/***********************************************************************************
************************** CONECTARSE A LA BASE DE DATOS ***************************
***********************************************************************************/

	$servername = "localhost";
	$username = "alumnorz";
	$password = "alumnorz";
	$dbname = "proyectofinal";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	mysqli_set_charset($conn, 'utf8');

	// Check connection
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?>