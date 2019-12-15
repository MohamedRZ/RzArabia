<?php

/*El requiere establece conexion con el ruta php establecida, tenemos una variable que selecciona los datos de la base de datos corespondientes a ofertas que se almacenan un la variable resultado.
El if establece que si el resultado es mayor que 0 se ejecute un while con una seccion en la que encontramos una imagen con el titulo y el precio dinamicos extraido de la base de datos. */
require_once "php/conectar_db.php";

if(isset($_GET['ident'])){

	$id = $_GET['ident'];
};

$sqlp = "SELECT * FROM producto WHERE Producto_ID = $id ";

$resultadop = $conn->query($sqlp);
?>

<div class="container">
	<!-- Tenemos un h2 que tiene incluido un php que invoca el nombre de la sesion -->
	  <br><h2>Editar el paquete</h2><br>

	  <!-- Tenemos un form con metodo post que manda los datos la a traves del action al archivo que tiene incluido-->
	  <form name="" method="post" action="php/modificar_paquetes.php">
	    <fieldset>
	    	<div class="form-group">

			  	<input type="text" id="imagenpppp" value="Imagen" disabled>
			  	<input type="text" name="idpp" id="idpp" value="ID" disabled>
			  	<input type="text" name="nombrepp" id="nombrepp" value="Nombre" disabled>
			  	<input type="text" name="preciopp" id="preciopp" value="Precio" disabled>
			  	<input type="text" name="unidadespp" id="unidadespp" value="Unidades" disabled>
			  	<input type="text" name="descripcionpp" id="descripcionpp" value="Descripción" disabled>
			  	<input type="text" name="categoriapp" id="categoriapp" value="Categoría" disabled><br><br>

	    	<?php
			if ($resultadop->num_rows > 0) {

				while($row = $resultadop->fetch_assoc()){

				echo '<img id="imagenpp" class="img-thumbnail" src="imagencont/'.$row['Imagen'].'">';
			  	echo '<input type="text" name="idp" id="idp" value="'.$row['Producto_ID'].'">';
			  	echo '<input type="text" name="nombrep" id="nombrep" value="'.$row['Nombre'].'">';
			  	echo '<input type="text" name="preciop" id="preciop" value="'.$row['Precio'].'">';
			  	echo '<input type="text" name="unidadesp" id="unidadesp" value="'.$row['Unidades'].'">';
			  	echo '<input type="text" name="descripcionp" id="descripcionp" value="'.$row['Descripcion'].'">';
			  	echo '<input type="text" name="categoriap" id="categoriap" value="'.$row['Categoria'].'">';
			  	}
			}
			?> 				

		</fieldset>
		<fieldset>

			<!-- Boton para enviar los datos del formulario actualizado-->
	  			<br><button type="submit" class="btn btn-dark">Actualizar paquetes</button>
	  			<span id="errorFin"></span>
	  				
	  				
	    </fieldset><br>


