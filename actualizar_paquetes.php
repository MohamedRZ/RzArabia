<?php $contenido ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">

	<head>
	<!-- El include recoge la informacion que hay ubicada en las rutas #########.php y la incluye en donde esta colocado cada include. -->
		<?php include("phpcont/link_meta_script.php"); ?>
		<title></title>
	</head>

	<body>
		<header>
			<?php include("phpcont/nav.php"); ?>
		</header>

		<nav>
			
		</nav>

		<section>
			<?php include("phpcont/actualizar_paquetes_cont.php"); ?>
		</section>

		<footer>
			<?php include("phpcont/footer.php"); ?>
		</footer>

	</body>
</html>