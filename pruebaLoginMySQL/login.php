<?php
	include("configuraDB.php"); // Configura la conexion a la BD
	session_start();
	$error = "No hay sesion abierta";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	  // usuario y clave enviados desde el formulario 
      $mi_usuario = mysqli_real_escape_string($db,$_POST['usuario']);
      $mi_clave = mysqli_real_escape_string($db,$_POST['clave']); 
      
      // Lee de la BD la columna 'id' del registro que coincide el usuario y clave
	  $query = "SELECT id FROM cuentas WHERE usuario = '$mi_usuario' and clave = md5('$mi_clave')";
      $resultado = mysqli_query($db,$query);
      $registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
      
      $conteo = mysqli_num_rows($resultado); // Numero de registros devueltos
      
      // Si el resultado coincide con $mi_usuario y $mi_clave, la tabla registro deberia tener 1 linea
      if($conteo == 1) {

         $_SESSION['usuario_login'] = $mi_usuario; // Abre sesion 
         header('location: '.$_GET['volver']); // Vuelve a la pagina principal
      }else {
         $error = "Usuario o clave invalidas";
      }
   }
?>
<html>
   
   <head>
      <title>Pagina de Ingreso</title>
      
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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>E-mail :</label><br><input type = "text" name = "usuario" class = "box"/><br /><br />
                  <label>Clave :</label><br><input type = "password" name = "clave" class = "box" /><br/><br />
                  <br>
				  <input type = "submit" value = " Ingreso "/>
				  <a style="float:right;" href="./registro.php?volver=login.php"><button type="button"> Registro </button></a>
				  <a style=";" href="index.php"><button type="button"> Cancel </button></a>
				  <br />
               </form>
               <br>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>