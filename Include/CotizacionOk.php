<?php
include 'Conecta.php';
if(isset($_POST['Cotizar'])){
$Atencion = $conecta->real_escape_string($_POST['Csolicitante']);
$TelefonoC = $conecta->real_escape_string($_POST['Ctelefono']);
$EmailC = $conecta->real_escape_string($_POST['Cemail']);
$FechaC = date('Y-m-d');
$fechaF = date('d-m-Y');
$Tcontacto = "";
// validacion de check box
if(isset($_POST['opcion'])){
  $Tcontacto = implode(' ', $_POST['opcion']);
}
$Servicio = $conecta->real_escape_string($_POST['servicio']);
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cotización</title>
  </head>
  <body>
    <div class="container mt-5 py-3">
      <div class="row content-justify-center h-100">
          <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card shadow">
                   <h4 class="text-center py-3">Gracias Por solicitar tu Cotización:<span class="text-primary"> <?php echo $Atencion;?></span></h4>
                   <div class="container">
                     <div class="row container">
                         <div class="col">
                           <span class="text-center">La fecha de envio es: <?php echo $fechaF; ?></span>
                         </div>
                     </div>
                   </div>
                </div>
          </div>
      </div>
    </div>
    <h2>dato</h2>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
