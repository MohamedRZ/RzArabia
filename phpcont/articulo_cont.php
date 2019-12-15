<?php

/*El requiere establece conexion con el ruta php establecida, tenemos una variable que selecciona los datos de la base de datos corespondientes a ofertas que se almacenan un la variable resultado.
El if establece que si el resultado es mayor que 0 se ejecute un while con una seccion en la que encontramos una imagen con el titulo y el precio dinamicos extraido de la base de datos. */
require_once "php/conectar_db.php";

if(isset($_GET['ident'])){

	$id = $_GET['ident'];
};

$sql = "SELECT * FROM producto WHERE Producto_ID = $id ";

$sqlc = "SELECT * FROM comentario WHERE Producto_Producto_ID = $id ";

$sqlcc = "SELECT * FROM usuario";

$resultado = $conn->query($sql);

$resultadoc = $conn->query($sqlc);

$resultadocc = $conn->query($sqlcc);

?>
<body>

			<div class="row">
				<?php


				if ($resultado->num_rows > 0) {

					while($row = $resultado->fetch_assoc()){

				  	echo '<div id="aruno" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin-left: 3%;">';
				  		echo '<article>';
					  		echo '<div class="hovereffectC">';
					  			echo '<img id="imagenimgC" class="img-thumbnail" src="imagencont/'.$row['Imagen'].'"></a>';
					  			echo '<div class="overlayC">';
					  				echo '<h2><img class="footimgC" src="logo\logo_sin_fondo.png" alt="Logo">'.$row['Nombre'].'</h2>';
					          		echo '<a class="infoC">Comprar '.$row['Precio'].' €</a>';
					          		echo '<a class="infoC" style="margin-left: 2%;" href="realizar_comentario.php?ident='.$row["Producto_ID"].'">Comentar</a>';
					        	echo '</div>';
				        	echo '</div>';
				  		echo '</article>';
				  	echo '</div>';
					        }
					    }
	        	?>
	        	<?php

	        	if ($resultadocc->num_rows > 0) {

	        		while($row = $resultadocc->fetch_assoc()) {

					        	echo '<div id="aruno" class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">';
						        	echo '<article>';
						  				echo '<h2>'.$row['Usuario_Nick'].'</h2>';
						  				echo '<hr>';
						  			}
						  		}
		  		if ($resultadoc->num_rows > 0) {

	        		while($row = $resultadoc->fetch_assoc()) {

						  				echo '<p id="coment" style="border: 1px black solid;">'.$row['Descripcion'].'</p>';
						  				echo '<h6 style="text-align: right;">'.$row['Fecha_Hora_C'].'</h6>';
						  				echo '</hr>';
						  				
						  			}
						  		}

		  		if ($resultadocc->num_rows > 0) {

	        		while($row = $resultadocc->fetch_assoc()) {

	        							echo '<hr>';
						  				echo '<h4>'.$row['Nombre'].'</h4>';
						  				echo '</hr>';
							  		echo '</article>';
							  	echo '</div>';
					    	
				  	}
				}
				?> 			
			</div>
			
</body>