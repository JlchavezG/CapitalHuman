<?php
include 'conecta.php';
// actualizar la tabla para indicar que no esta activo
include 'Conecta.php';
session_start();
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
   header("location:login.php");
}
// consulta para extraer todos los campo de el usuario en la sesion
$Q= "SELECT * FROM Usuarios WHERE UserName = '".$usuario."'";
$extraer = $conecta->query($Q);
$dupla = $extraer->fetch_array();
if ($dupla > 0) {
  $user = $dupla;
  $on1 = $user['Id_Usuarios'];
}
$on = "UPDATE Usuarios SET Online = '0' WHERE Id_Usuarios = $on1";
$line = $conecta->query($on);
session_start();
//olvidar la sesion
session_unset();
// destruir la sesion
session_destroy();
header("location:../login.php");


?>
