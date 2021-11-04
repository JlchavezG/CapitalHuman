<?php
error_reporting(0);
session_start();
include 'include/conecta.php';
if(isset($_POST['ingresar'])){
  $usuario = $conecta->real_escape_string($_POST['usuario']);
  $password = $conecta->real_escape_string(md5($_POST['password']));
  $q = "SELECT * FROM Usuarios WHERE UserName = '$usuario' and Password = '$password'";
  if ($resultado = $conecta->query($q)) {
    while ($row = $resultado->fetch_array()) {
      $userok = $row['UserName'];
      $passwordok = $row['Password'];
    }
      $resultado->close();
    }
    $conecta->close();
      if (isset($usuario) && isset($password)) {
          if ($usuario == $userok && $password == $passwordok) {
               $_SESSION['loguin']= TRUE;
               $_SESSION['Usuario'] = $usuario;
               header("location:clientes.php");
             }
           else {
              $alerta.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                           <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                             <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                           </svg>
                           <strong> Usuario y/o password invalido</strong> Por favor verifica tus credenciales o contacta a soporte.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
            }
      } else {
        header("location:login.php");
      }
   }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio Sesión | Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
        <div class="row d-flex justify-content-center">
             <div class="col-sm-6 col-md-6 col-lg-6 py-5">
                <div class="card shadow">
                   <div class="container">
                     <div class="row">
                        <img src="img/logo_human1.png" alt="">
                        <hr>
                     </div>
                     <div class="row py-2">
                       <h5 class="text-center"><svg class="bi" width="19" height="19" role="img" aria-label="Tools">
                       <use xlink:href="library/icons/bootstrap-icons.svg#shield-lock-fill"/>
                       </svg> Inicio de sesión</h5>
                       <p class="text-center text-muted">Por favor ingresa tu credenciales para acceder.</p>
                     </div>
                     <div class="row">
                         <div class="container">
                            <!-- inicia el fomulario de login -->
                             <form class="needs-validation" novalidate action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                               <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">
                                    <svg class="bi" width="19" height="19" role="img" aria-label="Tools">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#person-bounding-box"/>
                                    </svg>
                                  </span>
                                  <input type="text" class="form-control" name="usuario" id="user" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1" autocomplete="off" required>
                                  <div class="invalid-feedback">Digita tu nombre de usuario.</div>
                                  <div class="valid-feedback">Se ingreso nombre de usuario</div>
                               </div>
                               <div class="input-group mb-2">
                                  <span class="input-group-text" id="basic-addon1">
                                    <svg class="bi" width="19" height="19" role="img" aria-label="Tools">
                                        <use xlink:href="library/icons/bootstrap-icons.svg#key-fill"/>
                                    </svg>
                                  </span>
                                  <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" required>
                                  <div class="invalid-feedback">Digita tu Password.</div>
                                  <div class="valid-feedback">Se ingreso un Password</div>
                               </div>
                                 <div class="d-grid gap-2 py-3">
                                    <input type="submit" class="btn btn-primary bg-gradient btn-sm" name="ingresar" value="Ingresar">
                                 </div>
                               </form>
                               <!-- termina formulario login -->
                          </div>
                          <?php echo $alerta; ?>
                    </div>
                  </div>
               </div>
          </div>
      </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script>
      (function () {
         'use strict'
          var forms = document.querySelectorAll('.needs-validation')
          Array.prototype.slice.call(forms)
          .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
       }
      form.classList.add('was-validated')
       }, false)
      })
    })()
  </script>
  </body>
</html>
