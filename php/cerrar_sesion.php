<?php 

/*Este php cierra la sesion y nos manda a la pagina principal con la sesion cerrada. */

 session_start();
 session_unset();
 session_destroy();
 header('Location: http://localhost/proyecto_final/index.php');

 ?>
