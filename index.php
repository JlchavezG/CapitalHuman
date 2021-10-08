<?php
 include 'include/conecta.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- instalando boostrap en mi documento -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>JP Capital Human</title>
  </head>
  <body>
    <!-- barra de datos -->
    <div class="row" style="background-color:rgb(33, 97, 140);">
       <div class="col-sm-2 col-md-3 col-lg-7"></div>
       <div class="col text-center">
          <p class="text-light "><a href="#" class="text-light"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
              <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/></a>
            </svg> &nbsp; <a href="#" class="text-light"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
              <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/></a>
            </svg> &nbsp; <a href="#" class="text-light"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
              <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/></a>
              </svg></p>
       </div>
    </div>
    <!-- termina la barra de datos-->
    <!-- primera linea -->
    <div class="row">
        <div class="col">
        <!-- inicia el navbar principal -->
           <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color:rgb(33, 97, 140);" id="Menu">
               <div class="container-fluid">
                   <div class="d-flex flex-grow-1">
                        <span class="w-100 d-lg-none d-block">
                        <!-- cuando el menu sea responsive la marca se centrara --></span>
                        <a class="navbar-brand" href="#"> JP Capital Human </a>
                        <div class="w-100 text-right">
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
                       <ul class="navbar-nav ms-auto flex-nowrap">
                          <li class="nav-item">
                             <a href="#" class="nav-link active"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#house"/>
                                 </svg> Inicio</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#pen-fill"/>
                                 </svg> Somos</a>
                          </li>
                          <!-- nuetro navdrop-->
                          <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                   <use xlink:href="library/icons/bootstrap-icons.svg#building"/>
                                   </svg> Servicios
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#">Capacitación</a></li>
                             <li><a class="dropdown-item" href="#">Reclutamiento</a></li>
                             <li><hr class="dropdown-divider"></li>
                             <li><a class="dropdown-item" href="#">Creación de Manuales</a></li>
                           </ul>
                          </li>
                          <li class="nav-item">
                             <a href="#" data-bs-toggle="modal" data-bs-target="#InicioSesion" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-circle"/>
                               </svg> Iniciar Sesión</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                               </svg> Registro</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#chat-left-dots-fill"/>
                                 </svg> Contacto</a>
                          </li>
                        </ul>
                     </div>
                 </div>
              </nav>
           </div>
      </div>
      <!-- termina el nav -->
      <!-- inicia slider-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" style="background-color:rgb(33, 97, 140);" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:rgb(33, 97, 140);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:rgb(33, 97, 140);"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="img/slider1.png" class="d-block w-100" alt="slider1">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Contactanos</h5>
                  <p class="text-secondary">Somos la mejor opción para captar talento 100% cerificado.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider2.png" class="d-block w-100" alt="slider2">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">¿Necesitas un perfil especifico?</h5>
                  <p class="text-secondary">Nosotros a travez de tecnicas y procesos controlados cubrimos ese perfil.</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider3.png" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Te asesoramos en la creación de</h5>
                  <p class="text-secondary">Contratos simples, administración de documentos en RH, Manual de procedimientos y mucho màs.</p>
               </div>
            </div>
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:rgb(33, 97, 140);"></span>
          <span class="visually-hidden">Previous</span>
       </button>
       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:rgb(33, 97, 140);"></span>
          <span class="visually-hidden">Next</span>
       </button>
      </div>
      <!-- termina slider-->
      <!-- inicia barra de contacto -->
      <div class="row container justify-content-center">
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
          <div class="col-sm-10 col-md-10 col-lg-10  py-2">
              <div class="card shadow-lg">
                <div class="card-body text-center">
                      <span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill"/>
                      </svg></span><a href="tel:+52 55 55 55 55 55" class="text-dark text-decoration-none"> 55 55 55 55 55</a> &nbsp;|&nbsp;&nbsp;<span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#envelope-fill"/>
                      </svg></span><a href="mailto:contacto@jphuman.com" class="text-dark text-decoration-none">&nbsp; contacto@jphuman.com</a> &nbsp; | &nbsp; <span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#geo-alt-fill"/>
                      </svg></span> <a href="https://www.waze.com/es/live-map/directions/mexico/estado-de-mexico/naucalpan-de-juarez/conalep-plantel-naucalpan-i?place=ChIJBU_-LvID0oURRBhJfGF1zX0&utm_campaign=waze_website&utm_medium=website_menu&utm_source=waze_website" target="_blank" class="text-dark text-decoration-none">Naucalpan de Juarez Edo de Méx.</a>
                </div>
              </div>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
      </div>
      <!-- termina barra de contacto-->
      <!-- Inicia ventana Modal de inicio de sesion -->
      <div class="modal fade" id="InicioSesion" tabindex="-1" aria-labelledby="InicioSesionLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="InicioSesionLabel"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#shield-lock-fill"/>
                    </svg> Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                       <form class="" action="" method="post">
                           <div class="container">
                               <div class="row py-3">
                                  <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                               </div>
                               <div class="row py-3">
                                  <input type="password" name="password" class="form-control" placeholder="Password">
                               </div>
                           </div>
                       </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-success btn-sm">Ingresar</button>
                </div>
             </div>
          </div>
     </div>
     <!-- termina mi ventana modal -->
     <script src="js/bootstrap.min.js"></script>
  </body>
</html>
