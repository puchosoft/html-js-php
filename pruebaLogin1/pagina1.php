<?php
// pagina1.php

session_start();

echo 'Bienvenido a la pagina #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante']   = time();

// Funciona si la cookie de sesi�n fue aceptada
echo '<br /><a href="pagina2.php">pagina 2</a>';

// O quiz�s pasar el id de sesi�n, si fuera necesario
echo '<br /><a href="pagina2.php?' . SID . '">pagina 2</a>';
?>