<?php
   session_start();
  
   session_unset();
   session_destroy();
   
   echo 'Ud. cerró la sesion.';
   header('Refresh: 2; URL = index.php');
?>