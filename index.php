<?php
 include 'include/conecta.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- instalando boostrap en mi documento -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery.js"></script>
    <title>JP Capital Human</title>
  </head>
  <body>

    <!-- inicia el navbar principal -->
    <div class="row">
           <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:rgb(33, 97, 140); " id="Menu">
               <div class="container-fluid">
                   <div class="d-flex flex-grow-1">
                        <span class="w-100 d-lg-none d-block">
                        <!-- cuando el menu sea responsive la marca se centrara --></span>
                        <a class="navbar-brand" href="#"> JP Capital Human </a>
                        <div class="w-100 text-right">
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbarJl">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbarJl">
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
                                   <use xlink:href="library/icons/bootstrap-icons.svg#briefcase-fill"/>
                                   </svg> Servicios
                           </a>
                           <ul class="dropdown-menu menus" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#signpost-split-fill"/>
                                 </svg> Capacitación</a></li>
                             <li><a class="dropdown-item" href="#"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                 </svg> Reclutamiento</a></li>
                             <li><a class="dropdown-item" href="#"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-break-fill"/>
                                 </svg> Creación de Manuales</a></li>
                           </ul>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#chat-left-dots-fill"/>
                                 </svg> Contacto</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                                 </svg></a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                                 </svg></a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                                 </svg></a>
                          </li>
                        </ul>
                     </div>
                 </div>
              </nav>
      </div>
      <!-- termina el nav -->
      <!-- inicia slider-->
      <div id="carouselExampleCaptions" class="carousel slide py-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" style="background-color:rgb(33, 97, 140);" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:rgb(33, 97, 140);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:rgb(33, 97, 140);"></button>
        </div>
        <div class="carousel-inner py-3">
            <div class="carousel-item active">
               <img src="img/slider1.png" class="d-block w-100" alt="slider1">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Contactanos</h5>
                  <p class="text-secondary">Somos la mejor opción para captar talento 100% cerificado.</p>
                  <a href="#" class="btn btn-sm btn-info text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider2.png" class="d-block w-100" alt="slider2">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">¿Necesitas un perfil especifico?</h5>
                  <p class="text-secondary">Nosotros a travez de tecnicas y procesos controlados cubrimos ese perfil.</p>
                  <a href="#" class="btn btn-sm btn-info text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider3.png" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Te asesoramos en la creación de</h5>
                  <p class="text-secondary">Contratos simples, administración de documentos en RH, Manual de procedimientos y mucho màs.</p>
                  <a href="#" class="btn btn-sm btn-info text-light">Más Información</a>
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
      <div class="container">
      <div class="row align-self-center">
          <div class="col-sm-12 col-md-12 col-lg-12 py-2">
              <div class="card shadow-lg">
                <div class="card-body text-center">
                      <span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill"/>
                      </svg></span><a href="tel:+52 55 55 55 55 55" class="text-dark text-decoration-none"> 55 55 55 55 55</a> &nbsp; 55 55 55 55 55 &nbsp;|&nbsp;&nbsp;<span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#envelope-fill"/>
                      </svg></span><a href="mailto:contacto@jphuman.com" class="text-dark text-decoration-none">&nbsp; contacto@jphuman.com</a> &nbsp; | &nbsp; <span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#geo-alt-fill"/>
                      </svg></span> <a href="https://www.waze.com/es/live-map/directions/mexico/estado-de-mexico/naucalpan-de-juarez/conalep-plantel-naucalpan-i?place=ChIJBU_-LvID0oURRBhJfGF1zX0&utm_campaign=waze_website&utm_medium=website_menu&utm_source=waze_website" target="_blank" class="text-dark text-decoration-none">Naucalpan de Juarez Edo de Méx.</a>
                </div>
              </div>
          </div>
      </div>
    </div>
      <!-- termina barra de contacto-->
      <!-- inicia seccion servicios-->
      <div class="container py-4">
          <div class="row mx-auto">
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/img1-300x33.png" class="card-img-top" alt="...">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Card title</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Go somewhere</a>
                 </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/img2-300x33.png" class="card-img-top" alt="...">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Card title</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Go somewhere</a>
                 </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/img3-300x33.png" class="card-img-top" alt="...">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Card title</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Go somewhere</a>
                 </div>
                </div>
             </div>
          </div>
      </div>


     <script src="js/bootstrap.min.js"></script>
     <script>
        $(document).ready(function(){
        $('#s-icons').click(function() {
        $('.navbar-nav').toggleClass("show");
           });
        });
     </script>
  </body>
</html>
