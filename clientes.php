<?php
 include 'Include/confing.php';
 include 'Include/Query.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/push/push.min.js"></script>
    <title>Cuenta | clietes</title>
  </head>
  <body>
  <!-- inicia navbar-->
   <?php include 'include/navbar.php';?>
  <!-- termina nabvar -->
  <div class="container mt-5 py-4">
    <?php
     $dasboard = $user['Id_Tuser'];
     if($dasboard == 1){
       include 'Include/dashboard_sistemas.php';
     }
     elseif($dasboard == 2){
       include 'Include/dashboard_gerenteG.php';
     }
     elseif($dasboard == 3){
       include 'Include/dashboard_gerente.php';
     }
     ?>
  </div>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
