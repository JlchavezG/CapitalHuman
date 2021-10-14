<?php
error_reporting(0);
include '../include/Conecta.php';
include '../include/Consultas.php';
if(isset($_POST['verifica'])){
  $user1 = "506";
  $password = "Developer";
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  if($password == $pass && $user == $user1){
    echo "Correcto";
  }
  else{
    echo "Incorrecto";
  }
} 
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title>Plantilla | Huixilopostli Soft</title>
  </head>
  <body>
      <p class="text-center py-4">Crear una tabla con datos dinamicos</p>
      <div class="container py-4">
         <table class="table-sm table table-responsive table-hover py-3 bg-ligth">
            <thead>
              <tr class="py-2">
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellido Paterno</th>
                 <th scope="col">Apellido Materno</th>
                 <th scope="col">Telefono</th>
                 <th scope="col">User</th>
                 <th scope="col">Password</th>
              </tr>
            </thead>
            <tbody>
              <?php while($row = $Ejecuta->fetch_assoc()) { ?>
              <tr>
                <td class="text-justify"><?php echo $row['Nom']; ?></td>
                <td class="text-justify"><?php echo $row['ApellP']; ?></td>
                <td class="text-justify"><?php echo $row['ApellM']; ?></td>
                <td class="text-justify"><?php echo $row['Telefono']; ?></td>
                <td class="text-justify"><?php echo $row['User']; ?></td>
                <td class="text-justify"><?php echo $row['Pass'];?></td>
              </tr>
              <?php } ?>
            </tbody>
         </table>
      </div>
      <div class="container py4">
           <p class="text-center"> Uso de login con variables</p>
           <div class="row">
               <form class="form-control" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  <input type="text" name="user" placeholder="Usuario" required>
                  <input type="Password" name="pass" placeholder="Password" required>
                  <input type="submit" name="verifica" value="Ingresar">
               </form>
           </div>
      </div>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
