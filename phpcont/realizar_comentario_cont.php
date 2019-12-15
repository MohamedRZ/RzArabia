<?php

/*El requiere establece conexion con el ruta php establecida, tenemos una variable que selecciona los datos de la base de datos corespondientes a ofertas que se almacenan un la variable resultado.
El if establece que si el resultado es mayor que 0 se ejecute un while con una seccion en la que encontramos una imagen con el titulo y por ultimo tenemos un div donde se invoca el nombre del usuario logeado y el destino dinamicos de la base de datos con un area de texto para los comentarios de los usuarios */
require_once "php/conectar_db.php";

if(isset($_GET['ident'])){

	$id = $_GET['ident'];
};

$sql = "SELECT * FROM producto WHERE Producto_ID = $id ";

$resultado = $conn->query($sql);

$nombre = $_SESSION['Nombre'];
$clienteid = $_SESSION['Cliente_ID'];

?>
	<h2><center>Comparte con el resto tu experiencia.</center></h2>
<?php
/*Solo se podra comentar cuando el usuario esta logueado por lo que */
if (!empty($_SESSION["Nombre"])){

if ($resultado->num_rows > 0) {

	while($row = $resultado->fetch_assoc()){



		echo '<section id="destacado">';
			
			echo '<div class="container">';
				echo '<div class="row">';
				  	echo '<div id="aruno" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">';
				  		echo '<article>';
					  		echo '<div class="hovereffect">';
					  			echo '<img id="imagenimgX" class="img-thumbnail" src="imagencont/'.$row['Imagen'].'"></a>';
					  			echo '<div class="overlay">';
					  				echo '<h2>'.$row['Nombre'].'</h2>';
					        	echo '</div>';
					    	echo '</div>';
				  		echo '</article>';
				  	echo '</div>';
				  	echo '<div id="aruno" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">';
	  		 			echo '<form name="" method="post" action="php/registrar_experiencia.php?ident='.$row['Producto_ID'].'">';

	  		 			echo '<input type="hidden" name="clienteidE" id="clienteidE" value="$clienteid">';

	  		 			echo '<label for="usuariorE" name="usuariorE" id="usuariorE">'?><?php echo $_SESSION['Nombre'];?><?php echo '</label><br>';
				  		echo '<input type="hidden" name="productoE" id="productoE" value="$id"><h3>'.$row['Nombre'].'</h3>';
	  		 			echo '<textarea rows="4" cols="50" name="comentarioE">';
						echo '</textarea>';
						echo '<br><br>';
						echo '<button type="submit" class="btn btn-dark">Enviar experiencia</button>';
						echo '</form>';
						
						
				echo '</div>';
			echo '</div>';
		echo '</section>';
	}
}
}
?>