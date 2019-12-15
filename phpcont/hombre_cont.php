<?php

/*El requiere establece conexion con el ruta php establecida, tenemos una variable que selecciona los datos de la base de datos corespondientes a ofertas que se almacenan un la variable resultado.
El if establece que si el resultado es mayor que 0 se ejecute un while con una seccion en la que encontramos una imagen con el titulo y el precio dinamicos extraido de la base de datos. */
require_once "php/conectar_db.php";

$sql = "SELECT * FROM producto";

$resultado = $conn->query($sql);

?>
<body>

	<button class="tablink" onclick="openPage('Ropa', this, '#FAAC58')" id="defaultOpen">Ropa</button>
	<button class="tablink" onclick="openPage('Calzado', this, '#FAAC58')">Calzado</button>
	<button class="tablink" onclick="openPage('Pantalones', this, '#FAAC58')">Pantalones</button>
	<button class="tablink" onclick="openPage('Complementos', this, '#FAAC58')">Complementos</button>

	<div id="Ropa" class="tabcontent" style="display:block">
	  	<h3>Ropa</h3>
	  	<p>Chilabas y gandoras</p>


			<div class="row">
				<?php
				if ($resultado->num_rows > 0) {

					while($row = $resultado->fetch_assoc()){

				  	echo '<div id="aruno" class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">';
				  		echo '<article>';
					  		echo '<div class="hovereffectC">';
					  			echo '<img id="imagenimgC" class="img-thumbnail" src="imagencont/'.$row['Imagen'].'"></a>';
					  			echo '<div class="overlayC">';
					  				echo '<h2><img class="footimgC" src="logo\logo_sin_fondo.png" alt="Logo">'.$row['Nombre'].'</h2>';
					          		echo '<a class="infoC" href="articulo.php?ident='.$row["Producto_ID"].'" id="idproductop" name="idproductop" value"'.$row['Producto_ID'].'">Precio '.$row['Precio'].' €</a>';
					        	echo '</div>';
					    	echo '</div>';
				  		echo '</article>';
				  	echo '</div>';
				  	}
				}
				?> 			
			</div>
			
	  		
	<div id="Calzado" class="tabcontent">
	  	<h3>Calzado</h3>
	  	<p>Sandalias y babuchas</p> 
	</div>

	<div id="Pantalones" class="tabcontent">
	  	<h3>Pantalones</h3>
	  	<p>Pantalones bombachos y cagados</p>
	</div>

	<div id="Complementos" class="tabcontent">
	  	<h3>Complementos</h3>
	  	<p>Complementos arabes</p>
	</div>
</body>