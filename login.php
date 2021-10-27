<?php
// no nos imprima alertas dentro  de la pagina web
error_reporting(0);
// recordar la variable de sesión del login
session_start();
// conecar la pagina a la base de datos
include 'include/conecta.php';
// validar que inicie el proceso de login simepre y cuando se de clic al boton
if(isset($_POST['ingresar'])){
  // crear las ariables donde se guardaran los datos que me de el usuario
  $usuario = $_POST['usuario'];
  // utilizar md5 para leer el password incryptado
  $password = md5($_POST['password']);
  // consulta para ingresar al sistema y determinar la variable de session
  $q = "SELECT * FROM Usuarios WHERE UserName = '$usuario' and Password = '$password'";
  // varificar que los datos que nos dio el usaurio esten el la base de datos
  if ($resultado = $conecta->query($q)) {
   // a travez de un ciclo revisaremos linea por linea los datos y los sacaremos
    while ($row = $resultado->fetch_array()) {
      // guardaremos los datos encontrados de password y usuario en la las variables
      $userok = $row['UserName'];
      $passwordok = $row['Password'];
    }
      // cerramos la consulta
      $resultado->close();
    }
    // cerramos la conexión a la base de datos
    $conecta->close();
      // comparar que existan los datos de usuario y password
      if (isset($usuario) && isset($password)) {
          // comparar los datos del usaurio y los extraidos de la base de datos
          if ($usuario == $userok && $password == $passwordok) {
               // si esto se cumple se ejecutaran estas acciones
               // se crear las variables de sesion
               $_SESSION['loguin']= TRUE;
               $_SESSION['Usuario'] = $usuario;
               header("location:clientes.php");
             }
             // de lo contrario se mandara la alerta de usuario invalido
           else {
              $alerta.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                           <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                             <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                           </svg>
                           <strong> Usuario y/o password invalido</strong> Por favor verifica tus credenciales o contacta a soporte.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
            }
      // si no se da clic al boton ingresar      
      } else {
        header("location:index.php");
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
                    </div>
                  </div>
               </div>
          </div>
          <!-- mensaje -->
          <?php echo $alerta; ?>
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
