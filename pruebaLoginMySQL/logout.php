<div align=center style="widht:100%; height:100%; background-color:black;">
<?php
	session_start();

	if(session_destroy()) { // Cierra la sesion abierta
		echo '<img style="position:relative; top:15%;" src=".\img\maytheforcebewithyou.png">';
		header('Refresh: 3; URL = index.php'); // Vuelve a la pagina de Login
   }
?>
</div>