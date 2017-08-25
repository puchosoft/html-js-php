<?php
   include("configuraDB.php"); // Configura la conexion a la BD
   session_start();
   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
		// claves enviadas desde el formulario 
		$mi_clave1 = mysqli_real_escape_string($db,$_POST['clave1']); 
		$mi_clave2 = mysqli_real_escape_string($db,$_POST['clave2']); 
	    		
		if($mi_clave1 != '' && $mi_clave1 == $mi_clave2) {	
			
			// usuario enviado desde el formulario
			$mi_usuario = mysqli_real_escape_string($db,$_POST['usuario']);
			// Lee de la BD la columna 'id' si un registro coincide con un usuario que ya existe
			$query = "SELECT id FROM cuentas WHERE usuario = '$mi_usuario'";
			$resultado = mysqli_query($db,$query);
			$registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
			$conteo = mysqli_num_rows($resultado); // Numero de registros devueltos
			
			// Si el usuario todavia no existe
			if($conteo == 0) {
				$mi_nombre = mysqli_real_escape_string($db,$_POST['nombre']);
				$mi_apellido = mysqli_real_escape_string($db,$_POST['apellido']);
				$query = "INSERT INTO cuentas (nombre, apellido, usuario, clave, activo) VALUES ('$mi_nombre', '$mi_apellido', '$mi_usuario', md5('$mi_clave1'), TRUE)";
				// Escribe la nueva cuenta de usuario en la BD 
				mysqli_query($db,$query);
				$error = "La cuenta fue registrada correctamente";
				header('Refresh: 2; URL = '.$_GET['volver']);
				
			} else {
				$error = "El usuario ya existe";
			}
			
		} else {
			$error = "Las claves no coinciden";
		}
		
   }
?>
<html>
   
   <head>
      <title>Pagina de Registro</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "position:relative; top:50px; width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Registro de nueva cuenta</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Nombre :</label><br><input type = "text" name = "nombre" class = "box"/><br /><br />
				  <label>Apellido :</label><br><input type = "text" name = "apellido" class = "box"/><br /><br />
				  <label>E-mail :</label><br><input type = "email" name = "usuario" class = "box"/><br /><br />
                  <label>Clave :</label><br><input type = "password" name = "clave1" class = "box" /><br/><br />
                  <label>Repetir clave :</label><br><input type = "password" name = "clave2" class = "box" /><br/><br />
				  <br>
				  <input type = "submit" value = " Registro "/>
				  <a style="float:right;" href="./index.php"><button type="button"> Cancel </button></a>
				  <br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>