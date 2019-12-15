<div class="container">
<!-- Tenemos un h2 que tiene incluido un php que invoca el nombre de la sesion -->
  <h2>Registrate para una mejor experiencia.</h2>
  <!-- Tenemos un form con metodo post que manda los datos la a traves del action al archivo que tiene incluido-->
  <form name="" method="post" action="php/registro.php">
    <fieldset>
      <!-- Div e input para el nombre con un span vacio para mostrar los errores-->
	    <div class="form-group">
		    <label for="nombre">*Nombre</label><span id="errorNom"></span>
  			<input type="text" class="form-control" name="nombre" id="nombre" required>
  		</div>
      <!-- Div e input para el apellido con un span vacio para mostrar los errores-->
  		<div class="form-group">
  			<label for="apellido">*Apellido</label><span id="errorApe"></span>
  			<input type="text" class="form-control" name="apellido" id="apellido" required>
  		</div>
      <!-- Div e input para el usuario con varios span vacio para mostrar los errores-->
  		<div class="form-group">
  			<label for="usuarior">*Usuario</label><span id="usuariorr"></span><span id="errorUsu"></span>
  			<input type="text" class="form-control" name="usuarior" id="usuarior" maxlength="20" required>
  		</div>
      <!-- Div e input para el email con un span vacio para mostrar los errores-->
  		<div class="form-group">
  			<label for="email">*Correo electrónico</label><span id="errorEma"></span>
  			<input type="email" class="form-control" name="email" id="email" required>
			</div>
      <!-- Div e input para la contraseña con un span vacio para mostrar los errores-->
			<div class="form-group">
  			<label for="contra">*Contraseña</label><span id="errorCon"></span>
  			<input type="password" class="form-control" id="contra" placeholder="6 caracteres como mínimo" minlength="6" required>
			</div>
      <!-- Div e input para la contraseña con un span vacio para mostrar los errores-->
			<div class="form-group">
  			<label for="rcontra">*Repite la contraseña</label><span id="errorConR"></span>
  			<input type="password" class="form-control" name="rcontra" id="rcontra" minlength="6" required>
			</div>
      <!-- Div e input para el dni con un span vacio para mostrar los errores-->
			<div class="form-group">
  			<label for="dni">DNI</label><span id="errorDni"></span>
  			<input type="text" class="form-control" name="dni" id="dni" maxlength="9">
			</div>
      <!-- Div e input para el telefono con un span vacio para mostrar los errores-->
			<div class="form-group">
  			<label for="telefono">Número de teléfono</label><span id="errorTel"></span>
  			<input type="tel" class="form-control" name="telefono" id="telefono" axlength="9" maxlength="9">
			</div>
      <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" name="direccion" id="direccion" required>
      </div>

		</fieldset>
		<fieldset>
        <!-- Boton para enviar los datos del formulario registrados-->
  			<br><button type="submit" class="btn btn-dark">Registrarte</button>
        <!-- Boton para reiniciar el formulario-->
  			<button type="reset" name="reset" class="btn btn-dark">Reiniciar Registro</button><span id="errorFin"></span>
  			<br><br><h6>Los campos marcados con (*) son obligatorios.</h6>
  				
  				
    </fieldset><br>

  </form>
</div>
