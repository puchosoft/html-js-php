<?php
   session_start();
   
   if(session_destroy()) { // Cierra la sesion abierta
      header("location: login.php"); // Vuelve a la pagina de Login
   }
?>