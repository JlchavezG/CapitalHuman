<?php
error_reporting(0);
if(isset($_POST['ingresar'])){
  $mensaje;
  $usuario = "Sistemas";
  $password = "Developers";
  $user = $_POST['usuario'];
  $pass = $_POST['password'];
     if($user == "" || $pass == ""){
        $mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                     <strong>Error</strong> Ninguno de los campos puede estar vacio.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                   </div>";
     }
     else{
     if($usuario == $user && $password == $pass){
       $mensaje.="<div class='alert alert-success alert-dismissible fade show py-2' role='alert'>
                    <strong>Bienvenido</strong> Ingresaste al sistema. $user  
                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
     }
     else{
       $mensaje.="<div class='alert alert-warning alert-dismissible fade show py-3' role='alert'>
                    <strong>Error</strong> no eres usuario.
                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
      }
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
      <div class="container">
          <div class="row py-5">
              <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                   <input type="text" name="usuario" placeholder="Nombre de usuario" >
                   <input type="password" name="password" placeholder="Contraseña" >
                   <input type="submit" name="ingresar" value="Entrar">
              </form>
              <?php echo $mensaje; ?>
          </div>
      </div>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
