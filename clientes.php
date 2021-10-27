<?php
error_reporting(0);
session_start();
include 'include/Conecta.php';
// validar al usuario que pase por el password
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
  header("location:login.php");
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
  <?php echo $noti;?>
  <h2>Bienvendo: <?php echo $usuario; ?></h2>
  <a href="include/cerrar.php">cerrar Sesión</a>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
