<?php
 include 'Include/confing.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/push/push.min.js"></script>
    <title> Perfil | Clietes</title>
  </head>
  <body>
  <!-- inicia navbar-->
   <?php include 'include/navbar.php';?>
  <!-- termina nabvar -->
  <!-- crear el contenedor del perfil -->
    <div class="container py-5">
        <h1 class="py-5 text-info display-6 text-center">Perfil de Usuario</h1>
        <div class="row py-3">
              <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                 <img src="img/user/<?php echo $user['Imgen'];?>" alt="Foto de perfil" class="img-fluid rounded-circle" style="width:350px;">
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                   <div class="container">
                     <ul class="list-group list-group-flush">
                         <li class="list-group-item list-group-item-action">Nombre: <?php echo $user['Nombre']; ?></li>
                         <li class="list-group-item">Apellidos: <?php echo $user['ApellidoP']; ?> <?php echo $user['ApellidoM']; ?></li>
                         <li class="list-group-item">Telefono: <?php echo $user['Telefono']; ?></li>
                         <li class="list-group-item">Email: <?php echo $user['Email']; ?></li>
                         <li class="list-group-item">Nombre de Usuario: <?php echo $user['UserName']; ?></li>
                     </ul>
                   </div>
                   <div class="container">
                     <div class="row py-2">
                          <div class="col">
                            <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                              <use xlink:href="library/icons/bootstrap-icons.svg#printer-fill"/>
                            </svg> Imprimir
                          </div>
                          <div class="col">
                            <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                              <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/>
                            </svg> Modificar datos
                          </div>
                          <div class="col">

                          </div>
                     </div>
                   </div>
              </div>
        </div>
    </div>
  <!-- termina el contenedor del perfil -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
