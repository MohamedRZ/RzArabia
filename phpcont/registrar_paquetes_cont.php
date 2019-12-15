<div class="container">
<!-- Tenemos un h2 que tiene incluido un php que invoca el nombre de la sesion -->
  <h2>Registra el nuevo contenido de la Web.</h2>
  <!-- Tenemos un form con metodo post que manda los datos la a traves del action al archivo que tiene incluido-->
  <form name="" method="post" action="php/registrar_paquetes_bd.php">
    <fieldset>
      <!-- Div e input para el nombre con un span vacio para mostrar los errores-->
	    <div class="form-group">
		    <label for="nombreprod">*Nombre</label>
  			<input type="text" class="form-control" name="nombreprod" id="nombreprod" required>
  		</div>
      <!-- Div e input para el apellido con un span vacio para mostrar los errores-->
  		<div class="form-group">
  			<label for="precioprod">*Precio</label>
  			<input type="text" class="form-control" name="precioprod" id="precioprod" required>
  		</div>
      <!-- Div e input para el usuario con varios span vacio para mostrar los errores-->
  		<div class="form-group">
  			<label for="unidadesprod">*Unidades</label>
  			<input type="text" class="form-control" name="unidadesprod" id="unidadesprod" required>
  		</div>
      <!-- Div e input para el email con un span vacio para mostrar los errores-->
  		<div class="form-group">
  			<label for="descripcionprod">*Desripcion</label>
  			<input type="text" class="form-control" name="descripcionprod" id="descripcionprod" required>
			</div>
      <!-- Div e input para la contraseña con un span vacio para mostrar los errores-->
			<div class="form-group">
  			<label for="imagenprod">*Imagen</label>
  			<input type="file" class="form-control" name="imagenprod" id="imagenprod" required>
			</div>
      <!-- Div e input para la contraseña con un span vacio para mostrar los errores-->
			<div class="form-group">
  			<label for="categoriaprod">*Categoría</label>
  			<input type="text" class="form-control" name="categoriaprod" id="categoriaprod" required>
			</div>

		</fieldset>
		<fieldset>
        <!-- Boton para enviar los datos del formulario registrados-->
  			<br><button type="submit" class="btn btn-dark">Registrar Paquete</button>
        <!-- Boton para reiniciar el formulario-->
  			<button type="reset" name="reset" class="btn btn-dark">Reiniciar Registro</button><span id="errorFin"></span>
  			<br><br><h6>Los campos marcados con (*) son obligatorios.</h6>
  				
  				
    </fieldset><br>

  </form>
</div>
