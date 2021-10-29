<?php
session_start();
include 'include/conecta.php';
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
  header("location:login.php");
}
ini_set('date.timezone','America/Mexico_City');
$fecha = date('Y-m-d');
$tiempo = date('H:i:s',time());
$consulta = "SELECT * FROM Usuarios WHERE UserName = '$usuario'";
$r = $conecta->query($consulta);
$extraer = $r->fetch_array();
if($extraer > 0){
  $user = $extraer;
  $Online = $user['Id_Usuarios'];
  $on = "UPDATE Usuarios SET Online = '1' WHERE Id_Usuarios = $Online";
  $line = $conecta->query($on);
  // actualizar el historial

  // validacion de expirar sesion por tiempo
  if (isset($_SESSION['time'])) {
     // damos el timepo en segundo para determinar cuando expira la sesion
     $inactivo = 900; // 15 minutos
     // se calcula el tiempo inactivo ene l aplicativo
     $tiempo = time() - $_SESSION['time'];
     // verificamos si el tiempo pasa lo establecido para cerrar la sesion y redirigir
     if ($tiempo > $inactivo) {
       // actualizamos el campo online
       $on = "UPDATE Usuarios SET Online = '0' WHERE Id_Usuarios = $Online";
       $line = $conecta->query($on);
       //Olvidamos la Sesion
       session_unset();
       //destruimos la session
       session_destroy();
       //redirigimos ala pagina principal de login
       header("location:index.php");
       exit();
     }
  }
  $_SESSION['time'] = time();
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/push/push.min.js"></script>
    <title>clietes</title>
  </head>
  <body>
   <h3>Bienvenido: <?php  echo $usuario; ?></h3>  
   clietes
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
