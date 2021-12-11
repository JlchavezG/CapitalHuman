<?php
 include 'Include/Conecta.php';
 include 'Include/confing.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/push/push.min.js"></script>
    <title>Configuracion | Area de sistemas</title>
  </head>
  <body>
  <!-- inicia navbar-->
   <?php include 'include/navbar.php';?>
  <!-- termina nabvar -->
  <div class="container mt-5">
        <div class="row py-4">
               <div class="col-sm-4 col-md-4 col-lg-4 mt-5 ">
                   <div class="card shadow">
                        <div class="row container">
                            <div class="col py-3">
                            <svg class="bi" width="30" height="30" role="img" aria-label="Tools">
                                   <use xlink:href="library/icons/bootstrap-icons.svg#download"/>
                                 </svg>
                            </div>
                            <div class="col py-3">
                                <a href="include/repaldoBD.php"><span class="text-secondary">Respaldar BD</span></a>
                            </div>
                        </div>
                   </div>
               </div>
        </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
