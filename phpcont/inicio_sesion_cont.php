<!-- En esta pagina tenemos un titulo con un form que manda los datos introducidos en los input de usuario y contraseña a un php a traves del action pulsando el boton submit de entrar.
Abajo tenemos otra seccion con el copyR y con varios botones en los que se incluye el del mapa del sitio.-->

<div class="container">
<br><h2>Inicia sesion con Rz Arabia.</h2><br>

	
	<form name="" method="post" action="php/chequear_usuario.php">
		<fieldset>

			<div class="form-group">
				<label for="usuarioi">Usuario</label><span id="usuariorr"></span>
				<input type="text" class="form-control" name="usuarioi" id="usuarioi" required>
			</div>

			
				<div class="form-group">
				<label for="contrase">Contraseña</label>
				<input type="password" class="form-control" name="contrase" id="contrase" placeholder="6 caracteres como mínimo" minlength="6">
				</div>

		</fieldset>
		<fieldset>

			<br><button type="submit" class="btn btn-dark">Entrar</button>
			<a href="#">¿Olvidaste la contraseña?</a>
			<br><br><h6>*Si aún no te has registrado en Rz Arabia, <a href="registrarse.php">regístrate</a> ahora.</h6>
			
			
					
					
		</fieldset><br>

	</form>
</div>
