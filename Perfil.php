<?php
 include 'Include/confing.php';
 include 'Include/Query.php';
 include 'library/phpqrcode/qrlib.php';
 // crear codigo qr
 $dir = 'img/qr';
 if(!file_exists($dir))
   mkdir($dir);
   {
     $filename = $dir.'usuario'.$datosPerfil['Id_Usuarios'].'png';
     $tam = 4;
     $lavel = 'H';
     $FrameSize = '3';
     $QrNombre = $datosPerfil['Nombre'];
     $QrApellidoP = $datosPerfil['ApallidoP'];
     $QrApellidoM = $datosPerfil['ApellidoM'];
     $QrTelefono = $datosPerfil['Telefono'];
     $QrEmail = $datosPerfil['Email'];
     $QrPerfil = $datosPerfil['NombreT'];
     $QrContenido = 'BEGIN:VCARD'."\n"
     .'VERSION:2.1'."\n"
     .'FN:'.$QrNombre. $QrApellidoP. $QrApellidoM. "\n"
     .'TEL;WORK;VOICE:'.$QrTelefono."\n"
     .'TITLE:' .$QrPerfil. "\n"
     .'EMAIL:' .$QrEmail."\n"
     ."END:VCARD";
      QRcode::png($QrContenido,$filename,$lavel,$tam,$FrameSize);
   }
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
                           <a href="#" class="imgperfil text-center"><img src="img/user/<?php echo $datosPerfil['Imagen']; ?>" alt="Imagen de perfil" style="width:250px;" class="rounded-circle"></a>
                           <div class="py-1"><hr></div>
                           <h3 class="text-center"><?php echo $datosPerfil['Nombre'];?> <?php echo $datosPerfil['ApellidoP'];?> <?php echo $user['ApellidoM'];?></h3>
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
              <li class="list-group-item list-group-item-action">Email: <?php echo $datosPerfil['Email'];?></li>
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
                      <div class="col">
                        <span>
                           <a href="#" data-bs-toggle="modal" data-bs-target="#modalQr" class="text-decoration-none"><svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                           <use xlink:href="library/icons/bootstrap-icons.svg#cloud-download-fill"/>
                         </svg>&nbsp; QR</a>
                         </span>
                      </div>
                 </div>
            </div>
          </div>
       </div>
    </div>
  <!-- termina el contenedor del perfil -->
  <!-- Modal Qr -->
<div class="modal fade" id="modalQr" tabindex="-1" aria-labelledby="modalQrLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalQrLabel">Codigo Qr del Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
           <?php echo '<img src="'.$filename.'"class="rounded mx-auto d-block img-thumbnail">';?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
