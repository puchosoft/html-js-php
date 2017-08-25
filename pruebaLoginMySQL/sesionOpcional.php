<?php
	include('configuraDB.php'); // Configura la conexion a la BD
	session_start();

	if(isset($_SESSION['usuario_login'])){
		$usuario_a_verificar = $_SESSION['usuario_login']; // Lee del array de SESION el usuario actual

		$sesion_sql = mysqli_query($db,"select * from cuentas where usuario = '$usuario_a_verificar' "); // verifica que el usuario existe en la BD

		$registro = mysqli_fetch_array($sesion_sql,MYSQLI_ASSOC); // Convierte la busqueda en un array asociativo

		$usuario_login = $registro['usuario']; // Extrae del array el campo 'usuario', 'nombre' y 'apellido'
		$nombre_login = $registro['nombre'];
		$apellido_login = $registro['apellido'];
		
	} else {
		// Si no hay sesion abierta ...
		$usuario_login = 'anonimo';
		$nombre_login = 'Usuario';
		$apellido_login = 'Anonimo';
	}

	$avatar_login = $usuario_login.".png";
?>