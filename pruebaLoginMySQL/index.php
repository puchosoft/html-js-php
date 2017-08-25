<?php
   // Verifica si hay sesion abierta
   include('sesionOpcional.php');
?>

<html>
<head>
	<title>Pagina Publica</title>
</head>
<body>

<?php
$_GET['volver']='index.php';
include('encabezado.php');
?>

<div style="float:left; width:100%; text-align:center; background-color:#FFFFFF;">

<br>

<h1 style = "text-align:center;">Esta informacion es PUBLICA</h1>

<img style="height:400;" src=".\img\atat.jpg" >
</div>

<?php
include("pie.php");
?>

</body>
</html>




