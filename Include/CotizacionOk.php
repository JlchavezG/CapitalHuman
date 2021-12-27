<?php
include 'Conecta.php';
if(isset($_POST['Cotizar'])){
$Atencion = $conecta->real_escape_string($_POST['Csolicitante']);
$TelefonoC = $conecta->real_escape_string($_POST['Ctelefono']);
$EmailC = $conecta->real_escape_string($_POST['Cemail']);
$FechaC = date('Y-m-d');
$fechaF = date('d-m-Y');
$caracteres ="123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-.#!";
for ($i=0; $i < 10 ; $i++) {
  $token = substr(str_shuffle($caracteres),0,10);
}
$Tcontacto = "";
// validacion de check box
if(isset($_POST['opcion'])){
  $Tcontacto = implode(' ', $_POST['opcion']);
}
$Servicio = $conecta->real_escape_string($_POST['servicio']);
// consulta para servicio
$Tservicio = "SELECT * FROM Servicios WHERE Id_servicio = '$Servicio'";
$Tservicios = $conecta->query($Tservicio);
$SelectServ = $Tservicios->fetch_assoc();


}
else{
  header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/pace.css">
    <title>Cotización</title>
  </head>
  <body>
    <div class="container mt-3" id="print">
          <div class="row content-justify-center">
              <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                  <div class="card shadow">
                    <span class="text-muted text-center py-3"> Datos de la cotización</span>
                    <div class="card-body">
                       <h6 class="text-center"> Gracias por solicitar tu Cotización <span class="text-primary"><?php echo $Atencion; ?></span></h6>
                       <ul class="list-group list-group-flush">
                          <li class="list-group-item">Fecha de envio : <span class="text-primary"><?php echo $fechaF; ?></span></li>
                          <li class="list-group-item">Token de Cotización : <span class="text-primary"><?php echo $token; ?></span></li>
                          <li class="list-group-item">Atención a : <span class="text-primary"><?php echo $Atencion; ?></span></li>
                          <li class="list-group-item">Metodo de contacto :<span class="text-primary"> <?php echo $Tcontacto; ?></span></li>
                          <li class="list-group-item">Servicio a cotizar : <span class="text-primary"><?php echo $SelectServ['TServicio']; ?></span></li>
                       </ul>
                    </div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                 <div class="card shadow">
                     <div class="row py-3 text-center">
                         <span class="text-muted text-center"> Menu</span>
                         <div class="col">
                             <div class="container">
                               <svg class="bi text-primary" width="17" height="17" role="img" aria-label="Tools">
                                  <use xlink:href="../library/icons/bootstrap-icons.svg#printer-fill"/>
                               </svg><a href="javascript:window.print()" class="text-muted text-decoration-none"> Imprimir</a> |
                               <svg class="bi text-primary" width="17" height="17" role="img" aria-label="Tools">
                                  <use xlink:href="../library/icons/bootstrap-icons.svg#whatsapp"/>
                               </svg><a href="whatsapp://send?text=texto%20con%20URL" class="text-muted text-decoration-none"> Compartir</a> |
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row py-4 ">
                  <div class="text-center">
                    <img src="../img/logo_human.png" alt="logo_capital_human" style="width:250px;">
                  </div>
                 </div>
              </div>
          </div>
    </div>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
