<?php
 error_reporting(0);
 include 'Include/confing.php';
 include 'Include/Query.php';
 include 'library/phpqrcode/qrlib.php';
 // crear codigo qr
 $dir = 'img/qr/';
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
   if(isset($_POST['modificar'])){
    $mid = $_POST['id']; 
    $mNombre = $conecta->real_escape_string($_POST['nombre']);
    $mApellidop = $conecta->real_escape_string($_POST['apellido1']);
    $mApallidom = $conecta->real_escape_string($_POST['apellido2']);
    $mTelefono = $conecta->real_escape_string($_POST['telefono']);
    $mEmail = $conecta->real_escape_string($_POST['email']);
    // consulta para modificar datos 
    $modificar = "UPDATE Usuarios SET Nombre = '$mNombre', ApellidoP = '$mApellidop', ApellidoM = '$mApallidom', 
    Telefono = '$mTelefono', Email = '$mEmail'";
    $up = $conecta->query($modificar);
    if ($up > 0) {
      header("location:Perfil.php");
    }
    else {
      $alerta.="<div class='alert alert-danger alert-dismissible fade show shadow-lg p-3 mb-5 bg-white rounded' role='alert'>
                    <strong>Error al realizar los cambios</strong> Existe un problema al realizar los cambios solicitados por favor comunicate a soporte.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
    }
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
          <div class="col-sm-8 col-md-8 col-lg-8">
              <div class="card shadow">
                   <div class="container ">
                       <div class="row py-3 justify-content-center mt-3">
                           <a href="#" class="imgperfil text-center"><img src="img/user/<?php echo $datosPerfil['Imagen']; ?>" alt="Imagen de perfil" style="width:250px;" class="rounded-circle"></a>
                           <div class="py-1"><hr></div>
                           <h3 class="text-center"><?php echo $datosPerfil['Nombre'];?> <?php echo $datosPerfil['ApellidoP'];?> <?php echo $user['ApellidoM'];?></h3>
                           <span class="text-center">Tipo de Usuario: <span class="text-primary"><?php echo $datosPerfil['NombreT'];?></span></span>
                       </div>
                   </div>
                      <div class="container">
                        <div class="row py-3">
                         <div class="col-sm-6 col-md-6 col-lg-6">
                           <ul class="list-group list-group-flush">
                             <li class="list-group-item list-group-item-action">Telefono: <?php echo $datosPerfil['Telefono'];?></li>
                             <li class="list-group-item list-group-item-action">Genero: <?php echo $datosPerfil['NombreG'];?></li>
                             <li class="list-group-item list-group-item-action">Empresa: <?php echo $datosPerfil['NombreEmp'];?></li>
                             <li class="list-group-item list-group-item-action">Email: <?php echo $datosPerfil['Email'];?></li>
                             <li class="list-group-item list-group-item-action">Estatus: <?php echo $datosPerfil['EstatusNom']; ?> </li>
                           </ul>
                         </div>
                         <div class="col-sm-6 col-md-6 col-lg-6">
                           <div class="container">
                              <?php echo '<img src="'.$filename.'"class="rounded mx-auto d-block img-thumbnail">';?>
                           </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col">
            <div class="container">
                 <div class="row mt-4 text-center">
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
                           <a href="#" data-bs-toggle="modal" data-bs-target="#Modificar" class="text-decoration-none">
                             <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                               <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/>
                             </svg>&nbsp; Modificar </a>
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
       <?php echo $alerta; ?>
    </div>
<!-- termina el contenedor del perfil -->
<!-- modal modificar datos -->
<!-- Modal -->
<div class="modal fade" id="Modificar" tabindex="-1" aria-labelledby="ModificarLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="container">
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
             <div class="row py-2 text-center">
               <div class="col">
                 <input type="hidden" name="id" value="<?php echo $datosPerfil['Id_Usuarios'];?>">
                 <input type="text" name="nombre" class="form-control" value="<?php echo $datosPerfil['Nombre'];?>" placeholder="Nombre" required>
               </div>
               <div class="col">
                 <input type="text" name="apellido1" class="form-control" value="<?php echo $datosPerfil['ApellidoP'];?>" placeholder="Apellido Paterno" required>  
               </div>
               <div class="col">
               <input type="text" name="apellido2" class="form-control" value="<?php echo $datosPerfil['ApellidoM'];?>" placeholder="Apellido Materno" required>
               </div>
             </div>   
             <div class="row py-2 text-center">
             <div class="col">
                 <input type="tel" name="telefono" class="form-control" value="<?php echo $datosPerfil['Telefono'];?>" placeholder="Telefono" required>  
               </div>
               <div class="col">
                 <input type="email" name="email" class="form-control" value="<?php echo $datosPerfil['Email'];?>" placeholder="Email" required>  
               </div>
             </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" name="modificar" value="Modificar" class="btn btn-success btn-sm">
      </div>
    </div>
    </form>
  </div>
</div>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
