<?php
   // Verifica si hay sesion abierta
   $_GET['volver']='privada.php';
   include('sesionObligada.php');
?>

<html>
<head>
	<title>Pagina Privada</title>
</head>
<body>

<?php
include("encabezado.php");
?>

<div style="float:left; width:100%; text-align:center; background-color:#FFFFFF;">

<br>

<h1 style = "text-align:center;">Esta informacion es PRIVADA</h1>
	
<img style="height:400;" src=".\img\deathstar_planes.jpg" >

</div>

<?php
include("pie.php");
?>

</body>
</html>




