<?php
   // Verifica si hay sesion abierta
   include('sesion.php');
?>

<html>
<head>
	<title>Pagina Privada</title>
</head>
<body>

<?php
include("encabezadoPrivado.php");
?>

<div style="float:left; width:100%; text-align:center; background-color:#FFFFFF;">
<br>
<a href="./index.php"><button type="button">Inicio</button></a>
<a href="./privada.php"><button type="button">Informacion privada</button></a>
<a href="./logout.php"><button type="button">Logout</button></a>
<br>

<?php
if (!isset($usuario_login)){
	 echo "No se puede mostrar la informacion";
	}
	else {
		echo '<h1 style = "text-align:center;">Esta informacion es PRIVADA</h1>';
	}
?>

<img style="height:400;" src=".\img\deathstar_planes.jpg" >

</div>

<?php
include("pie.php");
?>

</body>
</html>




