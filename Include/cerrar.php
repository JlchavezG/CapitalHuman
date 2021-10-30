<?php
include 'conecta.php';
// actualizar la tabla para indicar que no esta activo

session_start();
//olvidar la sesion
session_unset();
// destruir la sesion
session_destroy();
header("location:../login.php");


?>
