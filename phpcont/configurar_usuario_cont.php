<?php

	/*Requiere establece conexion con el ruta php establecida*/
	require_once "php/conectar_db.php";
	/*Sesion Start almacena la sesion en la que se inicia*/
	
/***********************************************************************************
******************************** REGISTRAR USUARIOS ********************************
***********************************************************************************/
	/*Aqui creamos dos variables en la que recogemos el contenido de las
	sesiones usuario y nombre*/
	$usuarious = $_SESSION["Usuario_Nick"];
	$usuarionom = $_SESSION["Nombre"];


	/*Si usuarious y usuarionom existen...*/
	if ($usuarious&&$usuarionom) {

		/*Creamos una variable que seleciona en la base de datos los dos
		apartados que tenemos en la variable ordenados por el nombre*/
		$ssql = "SELECT * FROM usuario WHERE Usuario_Nick='$usuarious' AND Nombre='$usuarionom' ORDER BY Nombre ASC";

		/*Variable resultado que establece conexion con la base de datos
		teniendo en cuenta la variable con el contenido select*/
		$resultados = $conn->query($ssql);

		/*Si el resultado es igual a 1 ...*/
		if ($resultados->num_rows == 1) {

			/*Creamos un bucle que almacena en varias variables los apartados apellidos, email, etc.*/
			while($row = $resultados->fetch_assoc()) {

				$idi = $row["Cliente_ID"];
				$apellidosi = $row["Apellido"];
				$emaili = $row["Correo_Electronico"];
				$dnii = $row["DNI"];
				$telefonoi = $row["Telefono"];
				$direccioni = $row["Direccion"];

			}

			
		} 

	}

?>

<div class="container">
<!-- Tenemos un h2 que tiene incluido un php que invoca el nombre de la sesion -->
  <br><h2>Actualiza su informacion <?php echo $_SESSION ["Nombre"];?>.</h2>

  <!-- Tenemos un form con metodo post que manda los datos la a traves del action al archivo que tiene incluido-->
  <form name="" method="post" action="php/actualizar_datos.php">
    <fieldset>
    	<div class="form-group">	
		    <input type="hidden" class="form-control" name="idA" id="idA" value="<?php echo $idi?>">
  		</div>
    	<!-- Div e input para el nombre con un span vacio para mostrar los errores y un php que invoca el nombre de la sesion-->
	    <div class="form-group">
		    <label for="nombre">*Nombre</label><span id="errorNomA"></span>
  			<input type="text" class="form-control" name="nombreA" id="nombreA" value="<?php echo $_SESSION ["Nombre"];?>" required>
  		</div>
  		<!-- Div e input para el apellido con un span vacio para mostrar los errores y un php que invoca el apellido de la sesion-->
  		<div class="form-group">
  			<label for="apellido">*Apellido</label><span id="errorApeA"></span>
  			<input type="text" class="form-control" name="apellidoA" id="apellidoA" value="<?php echo $apellidosi;?>" required>
  		</div>
  		<!-- Div e input para el usuarioc on un php que invoca el usuario de la sesion y con un disable para que no se pueda modificar este campo-->
  		<div class="form-group">
  			<label for="usuarior">*Usuario</label>
  			<input type="text" class="form-control" name="usuariorA" id="usuariorA" maxlength="20" value="<?php echo $_SESSION ["Usuario_Nick"];?>" disabled>
  		</div>
  		<!-- Div e input para el email con un span vacio para mostrar los errores y un php que invoca el email de la sesion-->
  		<div class="form-group">
  			<label for="email">*Correo electrónico</label><span id="errorEmaA"></span>
  			<input type="email" class="form-control" name="emailA" id="emailA" value="<?php echo $emaili;?>" required>
		</div>
			<!-- Div e input para la contraseña con un span vacio para mostrar los errores-->
		<div class="form-group">
  			<label for="contra">*Contraseña</label><span id="errorConA"></span>
  			<input type="password" class="form-control" id="contraA" minlength="6" required>
		</div>
			<!-- Div e input para la contraseña con un span vacio para mostrar los errores-->
		<div class="form-group">
  			<label for="rcontra">*Repite la contraseña</label><span id="errorConRA"></span>
  			<input type="password" class="form-control" name="rcontraA" id="rcontraA" minlength="6" required>
		</div>
		<!-- Div e input para el dni con un span vacio para mostrar los errores-->
		<div class="form-group">
  			<label for="dni">DNI</label><span id="errorDniA"></span>
  			<input type="text" class="form-control" name="dniA" id="dniA" maxlength="9" value="<?php echo $dnii;?>">
		</div>
		<!-- Div e input para el telefono con un span vacio para mostrar los errores-->
		<div class="form-group">
  			<label for="telefono">Número de teléfono</label><span id="errorTelA"></span>
  			<input type="tel" class="form-control" name="telefonoA" id="telefonoA" axlength="9" maxlength="9" value="<?php echo $telefonoi;?>">
		</div>
		<div class="form-group">
	        <label for="direccion">Dirección</label>
	        <input type="text" class="form-control" name="direccionA" id="direccionA" value="<?php echo $direccioni;?>" required>
      	</div>

		</fieldset>
		<fieldset>

		<!-- Boton para enviar los datos del formulario actualizado-->
  			<br><button type="submit" class="btn btn-dark">Actualizar Información</button>
  			<span id="errorFin"></span>
  			<br><br><h6>Los campos marcados con (*) son obligatorios.</h6>
  				
  				
    </fieldset><br>

  </form>