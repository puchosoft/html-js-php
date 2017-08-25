<div style="display:inline; float:left; width:80%; height:60px; text-align:center; background-color:#F2F5A9;">
	<span style="font-family:verdana; font-size:200%; position:relative; top:10px;"> Este es el encabezado de la aplicacion</span>
</div>

<?php 
$carpeta_avatar = ".\avatar\\";
if(!file_exists($carpeta_avatar.$avatar_login)) {
	$avatar_login = "anonimo.png";
}
?>
 
 <div style="display:inline; float:right; width:20%; height:60px; color:white; background-color:black; font-family:verdana; font-size:80%;">
	<img style="display:inline; height:50; width:50; position:relative; top:5px; left:5px; background-color:grey;" src="<?php echo $carpeta_avatar.$avatar_login; ?>">
	<p style="display:inline; position:relative; top:-30px; left:10px;"><?php echo $nombre_login."&nbsp".$apellido_login; ?></p>
	<br>
	<p style="display:inline; position:relative; top:-20px; left:65px;"><?php echo "(".$usuario_login.")"; ?></p>
</div>

<div style="float:left; width:100%; text-align:center; background-color:#FFFFFF;">
<br>
<a href="./index.php"><button type="button">Inicio</button></a>
<a href="./privada.php"><button type="button">Informacion privada</button></a>

<?php
	if($usuario_login == 'anonimo') {
		echo('<a href="./login.php?volver='.$_GET['volver'].'"><button type="button">Login</button></a> ');
		echo('<a href="./registro.php?volver='.$_GET['volver'].'"><button type="button">Registro</button></a>');
	} else {
		echo('<a href="./logout.php"><button type="button">Logout</button></a>');
	}
?>
</div>
