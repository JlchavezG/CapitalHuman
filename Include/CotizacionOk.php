<?php
include 'Conecta.php';
if(isset($_POST['Cotizar'])){
$Atencion = $conecta->real_escape_string($_POST['Csolicitante']);
$TelefonoC = $conecta->real_escape_string($_POST['Ctelefono']);
$EmailC = $conecta->real_escape_string($_POST['Cemail']);
$Tcontacto = "";
if(isset($_POST['opcion'])){
  $Tcontacto = implode(' ', $_POST['opcion']);
}

$Servicio = $conecta->real_escape_string($_POST['servicio']);
echo $Atencion. $TelefonoC. $EmailC. $Tcontacto. $Servicio;
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
    <h2>dato</h2>
  </body>
</html>
