<?php
 include 'Include/confing.php';
 include 'Include/Query.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- optimizar el sitio web a movil -->
    <meta name="MobileOptimizer" content="width">
    <!-- la validacion de moviles sobre la plataforma-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- descrpcón de la empresa -->
    <meta name="description" content=" Acesso a clientes de la empresa especializada en recursos humanos, captación de talento, desarrollo de soluciones integrales como son: Soluciones digitales, Paqueteria express y Recursoos humanos">
    <!-- palabras clave -->
    <meta name="keywords" content="Servicio a clientes Capital Human World, Recursos para empresas, Archivo laboral, Contratos, Manuales de procedimientos, Organigrama empresarial, Perfiles, Soluciones digitales, Paginas web, Seo, Imagen corporativa">
    <mata name="autor" contend="Capital Human World Empresa epscializada en personal y captación de talento">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/push/push.min.js"></script>
    <title>Cuenta | Clietes Capital Human Wordl</title>
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
