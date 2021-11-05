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
    <title> Perfil | Clietes</title>
  </head>
  <body>
  <!-- inicia navbar-->
   <?php include 'include/navbar.php';?>
  <!-- termina nabvar -->
  <!-- crear el contenedor del perfil -->
    <div class="container py-5">
       <div class="row d-flex justify-content-center py-5">
          <div class="col py-4">
              <div class="card shadow">
                   <div class="container ">
                       <div class="row py-3 justify-content-center">
                           <img src="img/user/<?php echo $datosPerfil['Imagen']; ?>" alt="Imagen de perfil" style="width:250px;" class="rounded-circle">
                           <div class="py-1"><hr></div>
                           <h3 class="text-center"><?php echo $datosPerfil['Nombre'];?> <?php echo $datosPerfil['ApellidoP'];?> <?php echo $user['ApellidoM'];?></h3>
                           <div class="row text-center">
                               <span class="text-primary">Email:<?php echo $datosPerfil['Email']; ?></span>
                           </div>
                       </div>
                   </div>
              </div>
          </div>
          <div class="col py-4">
            <ul class="list-group list-group-flush">
              <li class="list-group-item active">Tipo de Usuario: <?php echo $datosPerfil['NombreT'];?></li>
              <li class="list-group-item list-group-item-action">Telefono: <?php echo $datosPerfil['Telefono'];?></li>
              <li class="list-group-item list-group-item-action">Genero: <?php echo $datosPerfil['NombreG'];?></li>
              <li class="list-group-item list-group-item-action">Empresa: <?php echo $datosPerfil['NombreEmp'];?></li>
              <li class="list-group-item list-group-item-action">Estatus: <?php echo $datosPerfil['EstatusNom']; ?> </li>
            </ul>
            <div class="container">
                 <div class="row mt-5 text-center">
                      <div class="col">
                       <span>
                            <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#printer-fill"/>
                            </svg>&nbsp; Imprimir
                        </span>
                      </div>
                      <div class="col">
                        <span>
                           <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                           <use xlink:href="library/icons/bootstrap-icons.svg#cloud-download-fill"/>
                           </svg>&nbsp; Descargar
                         </span>
                      </div>
                      <div class="col">
                        <span>
                           <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                           <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/>
                           </svg>&nbsp; Modificar
                        </span>
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
