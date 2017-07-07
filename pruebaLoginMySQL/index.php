<?php
   // Verifica si hay sesion abierta
   include('sesion.php'); // Verifica si hay sesion abierta
?>
<html>

   <head>
      <title>Pagina de Bienvenida </title>
   </head>

   <body>
      <!-- Saluda con nombre apellido y usuario extraidos de la BD -->
	  <h1>Bienvenido/a <?php echo $nombre_login." ".$apellido_login." (".$usuario_login.")"; ?></h1>
      <h2><a href = "logout.php">Logout</a></h2>
   </body>

</html>