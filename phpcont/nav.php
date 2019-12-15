<?php 
/* Aqui tenemos un switch que establece el atributo active a traves de una variable segun la ubicacion de la pagina*/
    switch ($_SERVER["SCRIPT_NAME"]){

        case "/proyecto_final/hombre.php":
            $HombreA = "active"; 
            break;
        case "/proyecto_final/mujer.php":
            $MujerA = "active";
            break;
        case "/proyecto_final/nene.php":
             $NeneA = "active";
            break;
        case "/proyecto_final/lamparas.php":
             $LamparasA = "active";
            break;
        case "/proyecto_final/registrarse.php":
            $RegistrarseA = "active"; 
            break;
        case "/proyecto_final/inicio_sesion.php":
            $InicioSesionA = "active";
            break;           
    }
?>


<!-- Tenemos un navegador superior compuesto por un logotipo a la izquierda a su continuacion los botones de las paginas  y un input con un boton de busqueda cada pagina se activa con un php activador que dependiendo en la pagina en la que se encuentre activa una u otra.-->
<header id="navbar">
	<nav id="navbardiv" class="navbar navbar-expand-md fixed-top">
		<a class="navbar-brand" href="index.php">
			<img id="logoimg" src="logo\logo_sin_fondo.png" alt="Logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
		
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
	    		<a class="nav-link <?php echo $HombreA; ?>" href="hombre.php">Hombre</a>
	    	</li>
			<li class="nav-item">
	    		<a class="nav-link <?php echo $MujerA; ?>" href="mujer.php">Mujer</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link <?php echo $NeneA; ?>" href="nene.php">Niños</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link <?php echo $LamparasA; ?>" href="lamparas.php">Lámparas arabes</a>
	    	</li>
		</ul><br>
		<ul>
		    <nav id="navB" class="navbar navbar-expand-sm navbar-light">
				<form class="form-inline" action="/action_page.php" >
					<input id="navBB" class="form-control mr-sm-2" type="text" placeholder="Buscar">
					<button id="navBB" class="btn btn-secondary"  type="submit">Buscar</button>
				</form>
			</nav>
		</ul>
		<ul class="navbar-nav navbar-right ml-auto">
			<?php if (empty($_SESSION["Nombre"])){ ?>
	    	<li class="nav-item">
	    		<a class="nav-link <?php echo $RegistrarseA; ?>" href="registrarse.php">Registrarte</a>
	    	</li>
	    	<li class="nav-item" id="registrarse">
	    		<a class="nav-link <?php echo $InicioSesionA; ?>" href="inicio_sesion.php">Iniciar sesion</a>
	    	</li>
	    	<?php } ?>
		</ul>

			<?php if (!empty($_SESSION["Nombre"])){ ?> 
			<span id="NSesion"><?php echo $_SESSION["Nombre"];?></span>
			<?php } ?>
			<?php if (!empty($_SESSION["Nombre"])){ ?>
			<a href="registrar_paquetes.php"><img id="imgexit" src="imagenes/editar.png"></a>
			<?php } ?>
			<?php if (!empty($_SESSION["Nombre"])){ ?>
			<a href="actualizar_paquetes.php"><img id="imgexit" src="imagenes/paquete.png"></a>
			<?php } ?>
			<?php if (!empty($_SESSION["Nombre"])){ ?>
			<a href="configurar_usuario.php"><img id="imgexit" src="imagenes/configuracion.png"></a>
			<?php } ?>
			<?php if (!empty($_SESSION["Nombre"])){ ?>
			<a href="php/cerrar_sesion.php"><img id="imgexit" src="imagenes/exit.png"></a>
			<?php } ?>
			
	</nav>
</header>