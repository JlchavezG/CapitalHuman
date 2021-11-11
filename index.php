<?php
 error_reporting(0);
 include 'include/conecta.php';
 include 'include/contador.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- instalando boostrap en mi documento -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="js/jquery.js"></script>
    <script src="js/push/push.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <title>Capital Human Wordl</title>
  </head>
  <body>
    <!-- inicia el navbar principal -->
    <div class="row">
           <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color:rgb(33, 97, 140);" id="menu">
               <div class="container-fluid">
                   <div class="d-flex flex-grow-1">
                        <span class="w-100 d-lg-none d-block">
                        <!-- cuando el menu sea responsive la marca se centrara --></span>
                        <a class="navbar-brand" href="#"><img src="img/logo_principal_web.png"></a>
                        <div class="w-100 text-right">
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbarJl">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbarJl">
                       <ul class="navbar-nav ms-auto flex-nowrap">
                          <li class="nav-item">
                             <a href="#" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#house"/>
                                 </svg> Inicio</a>
                          </li>
                          <li class="nav-item">
                             <a href="#Nostros" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#journals"/>
                               </svg> Nosotros</a>
                          </li>
                          <li class="nav-item">
                             <a href="#Servicios" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#briefcase-fill"/>
                               </svg> Servicios</a>
                          </li>
                          <!-- nuetro navdrop-->
                          <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle selectMenu" href="#Soluciones" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                   <use xlink:href="library/icons/bootstrap-icons.svg#bounding-box"/>
                                 </svg> Soluciones
                           </a>
                           <ul class="dropdown-menu menus" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#Examenes"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#signpost-split-fill"/>
                               </svg> Soluciones de Recursos Humanos</a></li>
                             <li><a class="dropdown-item" href="#Reclutamiento"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                               </svg> Soluciones Web</a></li>
                             <li><a class="dropdown-item" href="#Perfiles"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-break-fill"/>
                               </svg> Soluciones de Paqueteria</a></li>
                           </ul>
                          </li>
                          <li class="nav-item">
                             <a href="#Contacto" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#envelope-open-fill"/>
                                 </svg> Contacto</a>
                          </li>
                          <li class="nav-item nav-link selectMenu active">
                             <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-plus"/>
                               </svg> Numero de Visitas: <?php echo $visitante; ?>
                          </li>
                        </ul>
                     </div>
                 </div>
              </nav>
      </div>
      <!-- termina el nav -->
      <!-- inicia slider-->
      <section>
      <div id="carouselExampleCaptions" class="carousel slide py-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" style="background-color:rgb(33, 97, 140);" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:rgb(33, 97, 140);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:rgb(33, 97, 140);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4" style="background-color:rgb(33, 97, 140);"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5" style="background-color:rgb(33, 97, 140);"></button>
        </div>
        <div class="carousel-inner py-3">
            <div class="carousel-item active">
               <img src="img/slider1.png" class="d-block w-100" alt="slider1">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Contactanos</h5>
                  <p class="text-secondary">Somos la mejor opción para captar talento 100% cerificado.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider2.png" class="d-block w-100" alt="slider2">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">¿Necesitas un perfil especifico?</h5>
                  <p class="text-secondary">Nosotros a travez de tecnicas y procesos controlados cubrimos ese perfil.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider3.png" class="d-block w-100" alt="slider3">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">Te asesoramos en la creación de</h5>
                  <p class="text-secondary">Contratos simples, administración de documentos en RH, Manual de procedimientos y mucho màs.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider4.png" class="d-block w-100" alt="slider4">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">¿Necesitas un sitio web?</h5>
                  <p class="text-secondary">Nosotros te ayudamos a realizarlo segun las necesidades y caracteristicas de tu negocio.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/slider5.png" class="d-block w-100" alt="slider5">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-muted">¿La mejor forma de enviar o recibir tus paquetes?</h5>
                  <p class="text-secondary">Nuestro servicio es personalizado y 100% confidencial.</p>
                  <a href="#" class="btn btn-sm bg-primary bg-gradient text-light">Más Información</a>
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
    </section>
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
                      </svg><a href="mailto:contacto@capitalhumanworld.com" class="text-dark text-decoration-none">&nbsp; contacto@capitalhumanworld.com</a> &nbsp; | &nbsp; <span style="color:#2980B9;">
                        <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                      </svg>&nbsp;&nbsp; <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>&nbsp;&nbsp;</span>
                          &nbsp;&nbsp; <svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                              <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                    </svg>
                </div>
              </div>
          </div>
      </div>
    </div>
    <!-- termina barra de contacto-->
    <!-- Apartado de nosotros -->
    <section id="Nostros">
        <div class="row py-5">
            <div class="col-sm-6 col-md-6 col-lg-6 text-center py-5">
                <img src="img/logo_human1.png" class="img-fluid" alt="Logo JP Human">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 bg-info py-3 shadow">
                <h2 class="text-center text-light display-6"> Nosotros</h2>
                <hr class="text-light">
                <div class="container">
                   <p class="text-light text-justify py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                   fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                   culpa qui officia deserunt mollit anim id est laborum.</p>
                   <div class="row text-center">
                       <div class="col">
                         <a data-bs-toggle="offcanvas" href="#offcanvasCalidad" class="text-decoration-none" role="button" aria-controls="offcanvasExample"><svg class="bi text-light" width="42" height="42" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#bookmark-fill"/>
                         </svg>
                         <h5 class="text-light">Calidad</h5></a>
                       </div>
                       <div class="col">
                         <a data-bs-toggle="offcanvas" href="#offcanvasServicio" class="text-decoration-none"><svg class="bi text-light" width="42" height="42" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#cup-fill"/>
                         </svg>
                         <h5 class="text-light">Servicio</h5></a>
                       </div>
                       <div class="col">
                         <a data-bs-toggle="offcanvas" href="#offcanvasSeguridad" class="text-decoration-none"><svg class="bi text-light" width="42" height="42" fill="currentColor">
                         <svg class="bi text-light" width="42" height="42" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#shield-lock-fill"/>
                         </svg></a>
                         <h5 class="text-light">Seguridad</h5>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- termina apartado -->
    <!-- inician los ofcanvas-->
    <!-- calidad -->
    <div class="offcanvas offcanvas-bottom valores" tabindex="-1" id="offcanvasCalidad" aria-labelledby="offcanvasCalidadLabel">
       <div class="offcanvas-header py-2">
            <h5 class="offcanvas-title text-center text-muted" id="titulo">Calidad</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
          <div class=""><hr>
             <p>La calidad significa mucho para nosotros por lo tanto aportamos valor a nuestros clientes, esto es, ofrecer las mejores condiciones de nuestros servicio superiores a las que nuestros cliente espera recibir y a un precio accesible.</p>
          </div>
       </div>
    </div>
    <!-- termina calidad -->
    <!-- Servicio -->
    <div class="offcanvas offcanvas-bottom valores" tabindex="-1" id="offcanvasServicio" aria-labelledby="offcanvasCalidadLabel">
       <div class="offcanvas-header py-2">
            <h5 class="offcanvas-title text-center text-muted" id="titulo">Servicio</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
          <div class=""><hr>
             <p>Nos preocupamos por nuestro clientes brindandoles el mejor servicio a punto personalizado para ayudar a solucionar todas sus necesidades al alcance de nuestras soluciones.</p>
          </div>
       </div>
    </div>
    <!-- termina Servicio -->
    <!-- calidad -->
    <div class="offcanvas offcanvas-bottom valores" tabindex="-1" id="offcanvasSeguridad" aria-labelledby="offcanvasCalidadLabel">
       <div class="offcanvas-header py-2">
            <h5 class="offcanvas-title text-center text-muted" id="titulo">Seguridad</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
          <div class=""><hr>
             <p>Nuestros clientes son lo más importante para nosotros asi que la seguridad de nustros productos y servicios esta garantizada para satisfaces las necesidades de todas nustras soluciones.</p>
          </div>
       </div>
    </div>
    <!-- termina calidad -->
    <!-- terminas ofcanvas-->
    <!-- inicia seccion servicios-->
    <section id="Servicios">
    <div class="container py-4">
          <div class="row mx-auto">
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/rh.png" class="card-img-top" alt="Recursos Humanos">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Recursos Humanos</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#Examenes" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Más Información</a>
                 </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/sd.png" class="card-img-top" alt="Servicios Digitales">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Soluciones Web</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#Digital" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Más Información</a>
                 </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4 py-4">
               <div class="card shadow">
                   <img src="img/re.png" class="card-img-top" alt="Paqueteria Express">
                   <div class="card-body">
                      <h5 class="card-title text-center text-muted">Paqueteria Express</h5>
                      <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#Web" class="btn btn-info btn-sm d-grid gap-2 text-center text-light">Más Información</a>
                 </div>
                </div>
             </div>
          </div>
      </div>
    </section>
      <!-- barra social -->
      <div class="social-icons" id="s-icons">
         <ul class="navbar-nav">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//iscjoseluischavezg.mx" target="_blank" class="btn btn-primary btn-social "><svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                </svg></a></li>
            <li><a href="https://twitter.com/intent/tweet?text=compartir" target="_blank" class="btn btn-info btn-social text-light"><svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                </svg></a></li>
            <li><a href="https://api.whatsapp.com/send?text=Compartir a compartir desde: https://iscjoseluischavezg.mx" target="_blank" class="btn btn-success btn-social">
              <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
                  <use xlink:href="library/icons/bootstrap-icons.svg#whatsapp"/>
                  </svg>
            </a></li>
         </ul>
         <button class="btn btn-primary btn-social" id="btn-share" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
           <svg class="bi" width="20" height="20" role="img" aria-label="Tools">
               <use xlink:href="library/icons/bootstrap-icons.svg#share-fill"/>
           </svg>
         </button>
      </div>
     <!-- termina barra social -->
     <!-- inicia boton ir arriba -->
     <span class="ir-arriba">
       <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
           <use xlink:href="library/icons/bootstrap-icons.svg#arrow-up-circle-fill"/>
       </svg>
     </span>
     <!-- termina boton ir a rriba-->
     <section id="Soluciones" class="py-4">
        <div class="row banner">
            <div class="col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 text-center">
                 <div class="container">
                     <h3 class="display-5 py-3">Nuestras Soluciones en Recursos Humanos</h3><hr>
                     <h5 class="text-muted align-top py-3">Más de 1500 usuarios nos respaldan</h5>
                 </div>
            </div>
        </div>
        <div class="container">
           <div class="row text-center py-5">
               <div class="col-sm-4 col-md-4 col-lg-2">
                   <div class="py-3 menubtn">
                     <a href="#Reclutamiento"><svg class="bi" width="45" height="45" role="img" aria-label="Tools">
                       <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill" style="color:#e64c23;"/>
                     </svg></a>
                     <div class="text-muted mt-2">Reclutamiento</div>
                   </div>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2">
                  <div class="py-3 menubtn">
                    <a href="#Perfiles"><svg class="bi" width="45" height="45" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#person-badge-fill" style="color:#e64c23;"/>
                    </svg></a>
                    <div class="text-muted mt-2">Perfiles y Puestos</div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2">
                 <div class="py-3 menubtn">
                   <a href="#Organigrama"><svg class="bi" width="45" height="45" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#diagram-3-fill" style="color:#e64c23;"/>
                   </svg></a>
                   <div class="text-muted mt-2">Organigrama</div>
                 </div>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2">
                  <div class="py-3 menubtn">
                    <a href="#Manuales"><svg class="bi" width="45" height="45" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-fill" style="color:#e64c23;"/>
                    </svg></a>
                    <div class="text-muted mt-2">Manuales</div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2">
                  <div class="py-3 menubtn">
                    <a href="#Contratos"><svg class="bi" width="45" height="45" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-text" style="color:#e64c23;"/>
                    </svg></a>
                    <div class="text-muted mt-2">Contratos</div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2">
                 <div class="py-3 menubtn">
                   <a href="#Archivo"><svg class="bi" width="45" height="45" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#folder-plus" style="color:#e64c23;"/>
                   </svg></a>
                   <div class="text-muted mt-2">Archivo Laboral</div>
                 </div>
               </div>
           </div>
        </div>
     </section>
     <section class="py-4">
         <div class="container">
             <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <h3 class="display-6" style="color:rgb(33, 97, 140);">Examenes Psicometricos</h3>
                  <p class="text-muted text-break">Aplicación de pruebas Psicometricas y proyectivas. Es esencial para detectar la adaptabilidad de las personas que conformaran tu equipo de trabajo, evaluando la personalidad de cada individuo.</p>
                  <p class="fw-bold">Conoce los diferentes tipos de exámenes psicométricos, te apoyamos a elegir el que mejor se adapte a las necesidades de tu empresa y/o negocio.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-center py-3">
                  <img src="img/Examenes.png" alt="Examenes psicometricos" id="Reclutamiento">
                </div>
             </div>
         </div>
     </section>
     <section id="Reclutamiento" class="py-1">
         <div class="container">
             <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <img src="img/personal.png" alt="Seleccion de personal">
                </div>
                <div class="col">
                    <h3 class="display-6" style="color:rgb(33, 97, 140);">Reclutamiento y selección</h3>
                  <p class="text-muted justificado">Configura a las necesidades de tu Empresa y/o negocio las faces de reclutamiento para tus proyectos o vacantes especializadas. Toma todas nustras ventajas de reclutamiento:</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg>&nbsp; Getion de candidatos
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg>&nbsp; Entrevista por competencia
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg>&nbsp; Reclutamiento Personalizado
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg>&nbsp; Selección de talento
                    </li>
                  </ul>
                </div>
             </div>
         </div>
     </section>
     <section id="Perfiles" class="py-4">
         <div class="container">
             <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <h3 class="display-6" style="color:rgb(33, 97, 140);">Perfiles y Descripciones de puestos</h3>
                  <p class="text-muted text-break">Las descripciones y perfiles de puesto te ayudan a conocer e identificar las funciones y actividades de cada empleado, con la finalidad de definir claramente lo que se espera alcanzar y el valor que agregan cada uno de los empleados para alcanzar los objetivos establecidos por la organización.</p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg> Resumen del Puesto
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg>&nbsp; Tareas del Puesto
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg>&nbsp; Requerimientos
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                      </svg>&nbsp; Otros Aspectos
                    </li>
                  </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                  <img src="img/Perfiles.png" alt="Examenes psicometricos">
                </div>
             </div>
         </div>
     </section>
     <section id="Organigrama" class="py-1">
         <div class="container">
             <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <img src="img/organigrama.png" alt="Seleccion de personal">
                </div>
                <div class="col">
                    <h3 class="display-6" style="color:rgb(33, 97, 140);">Organigrama Empresarial</h3>
                  <p class="text-muted text-justify py-2">Un organigrama es necesario para planificar la comunicación interna y el flujo de trabajo, por lo que estructurar un organigrama es fundamental para agilizar los procesos.</p>
                  <div class="row text-justify py-3">
                  <p class="fw-bold">Una representación visual de la jerarquía del personal,la estructura y flujo de la información dentro de una empresa. Es posible identificar de un modo directo las diferentes relaciones entre funciones, departamentos, equipos e individuos.</p>
                  </div>
                </div>
             </div>
         </div>
     </section>
   <!-- inicia banner efecto -->
   <div class="row py-3">
     <div class="col-sm-2 col-md-2 col-lg-2"></div>
     <div class="col-sm-10 col-md-10 col-lg-10 banner2 shadow">
         <div class="container py-3">
            <h3 class="text-center text-light display-6">Capital Human World</h3><hr class="text-light">
            <p class="text-light">Todo nuestro personal y asesores estan capacitados para poder responder todas tus dudas sobre nustros servicios y soluciones para tu empresa y/o negocio. Selecciona cualquiera de las opciones que tenemos para contactarnos.</p>
             <div class="row text-center py-3">
                 <div class="col">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#llamada"><svg class="bi text-light" width="35" height="35" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#headset"/>
                   </svg></a>
                   <p class="text-light">Via telefonica</p>
                 </div>
                 <div class="col">
                   <a href="#" data-bs-toggle="modal" data-bs-target="#whatsapp"><svg class="bi text-light" width="35" height="35" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#whatsapp"/>
                   </svg></a>
                   <p class="text-light">Via whatsapp</p>
                 </div>
                 <div class="col">
                   <a href="mailto:contacto@capitalhumanworld.com"><svg class="bi text-light" width="35" height="35" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#mailbox2"/></a>
                   </svg>
                   <p class="text-light">Via Email</p>
                 </div>
             </div>
             <div class="row">
                 <div class="container text-center py-3">
                    <button type="button" name="button" class="btn btn-sm btn-info text-light">Descarga nuestra carta de presentación</button>
                 </div>
             </div>
         </div>
     </div>
   </div>
<!-- termina banner -->
<!-- inician ventanas modales del banner -->
<!-- Modal llamada -->
<div class="modal fade" id="llamada" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="llamadaLabel"><svg class="bi text-dark" width="20" height="20" role="img" aria-label="Tools">
         <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill"/>
       </svg> Contacto via telefonica</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
        <div class="container text-center">
            <div class="row py-4">
              <svg class="bi text-dark" width="40" height="40" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#telephone-outbound-fill"/>
              </svg>
            </div>
            <div class="row">
                 <p>Contacta a nustros asesores por medio de los telefonos:</p>
                 <div class="col"><p class="fs-4"><a href="tel:+52 55-55-55-55-55" class="text-decoration-none">55-55-55-55-55</a></p></div>
                 <div class="col"><p class="fs-4"><a href="tel:+52 55-55-55-55-55" class="text-decoration-none">55-55-55-55-55</a></p></div>
            </div>
        </div>
     </div>
     <div class="modal-footer">
       <p class="text-muted">Consulta nuestro aviso de privacidad: Aqui</p>
     </div>
   </div>
 </div>
</div>
<!-- termina nodal llamada-->
<!-- Modal whatsapp -->
<div class="modal fade" id="whatsapp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="whatsappLabel"><svg class="bi text-dark" width="20" height="20" role="img" aria-label="Tools">
         <use xlink:href="library/icons/bootstrap-icons.svg#whatsapp"/>
       </svg> Contacto via whatsapp</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
        <div class="container text-center">
            <div class="row py-4">
              <svg class="bi text-dark" width="40" height="40" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#whatsapp"/>
              </svg>
            </div>
            <div class="row">
                 <p>Contacta a nustros asesores por medio de un mensaje de whatsapp escribenos</p>
                 <div class="col"><p class="fs-4"><a href="https://wa.link/gdmtsx" target="_blank" class="text-decoration-none">Escribenos tus dudas</a></p></div>
            </div>
        </div>
     </div>
     <div class="modal-footer">
       <p class="text-muted">Consulta nuestro aviso de privacidad: Aqui</p>
     </div>
   </div>
 </div>
</div>
<!-- termina ventana modal whatsapp -->
<!-- terminan ventanas modales del banner -->
<section id="Manuales" class="py-4">
       <div class="container">
           <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
                <h3 class="display-6" style="color:rgb(33, 97, 140);">Manuales de procedimientos</h3>
                <p class="text-muted text-justify py-2">Te ayudamos a crear un documento del sistema de Control Interno de tu empresa, el cual se crea para obtener una información detallada, ordenada, sistemática e integral que contiene todas las instrucciones, responsabilidades e información sobre políticas, funciones, sistemas y procedimientos de las distintas operaciones.</p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                <img src="img/Manual.png" alt="Examenes psicometricos">
              </div>
           </div>
       </div>
</section>
<section id="Contratos" class="py-1">
       <div class="container">
           <div class="row ">
              <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                  <img src="img/Contratos.png" alt="Seleccion de personal">
              </div>
              <div class="col">
                  <h3 class="display-6" style="color:rgb(33, 97, 140);">Elaboración de Contratos</h3>
                <p class="text-muted text-break">Somos expertos en realizar contratos de acuerdo a las necesidades del proyecto, empresa con la certeza legal y vigencia actual en nuestro pais, desarrollamos los siguientes contratos: </p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item list-group-item-action">
                    <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                    </svg>&nbsp; Por obra o tiempo determinado
                  </li>
                  <li class="list-group-item list-group-item-action">
                    <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                    </svg>&nbsp; Por tiempo indeterminado
                  </li>
                  <li class="list-group-item list-group-item-action">
                    <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                    </svg>&nbsp; Periodo de Prueba
                  </li>
                  <li class="list-group-item list-group-item-action">
                    <svg class="bi text-warning" width="15" height="15" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                    </svg>&nbsp; Por capacitación inicial
                  </li>
                </ul>
              </div>
           </div>
       </div>
</section>
   <section id="Archivo" class="py-4">
       <div class="container">
           <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <h3 class="display-6" style="color:rgb(33, 97, 140);">Elaboración de archivo laboral</h3>
                <p class="text-muted text-break">Te ayudamos a crear y a organizar un sistema de Control de archivo laboral Interno de tu empresa, el cual se crea para obtener una información detallada de tus empleados, capacitaciones, funciones y más.</p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                <img src="img/Archivo.png" alt="Examenes psicometricos">
              </div>
           </div>
       </div>
   </section>
   <!-- inicia seccion solucuines web -->
   <section id="SolucionesWeb">
       <div class="row py-5">
           <div class="col-sm-5 col-md-5 col-lg-5 bg-info py-3 shadow">
               <h2 class="text-center text-light display-6"> Soluciones Web</h2>
               <hr class="text-light">
               <div class="container">
                  <p class="text-light text-justify-contend py-4">Desarrollamos sitios web efectivos y diseñados para posicionar a tu empresa o negocio. El principal objetivo del diseño web es transmitir una imagen profesional y de calidad, que sea ágil con un diseño moderno, atractivo y responsivo.</p>
               </div>
           </div>
           <div class="col-sm-12 col-md-6 col-lg-6 py-3">
              <img src="img/web.png" alt="Diseño web" class="img-fluid">
           </div>
       </div>
   </section>
   <!-- termina seccion -->
   <section id="Digital">
    <div class="row py-3">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
             <h3 class="display-6 mt-2">Opciones dentro de tu web</h3><hr>
             <div class="row mt-3">
                <div class="col mt-4">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#border-inner"/>
                  </svg>
                  <p class="text-muted">Seleccion de secciones</p>
                </div>
                <div class="col mt-4">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#rss-fill"/>
                  </svg>
                  <p class="text-muted">Integración con redes sociales</p>
                </div>
                <div class="col mt-4">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#palette2"/>
                  </svg>
                  <p class="text-muted">Diseño personalizado</p>
                </div>
                <div class="col mt-4">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#google"/>
                  </svg>
                  <p class="text-muted">Optimización en motores de busqueda</p>
                </div>
             </div>
             <div class="row py-3">
                <div class="col">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#inboxes-fill"/>
                  </svg>
                  <p class="text-muted">Contratación de hosting y dominio</p>
                </div>
                <div class="col">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#phone-fill"/>
                  </svg>
                  <p class="text-muted">Diseño Responsivo</p>
                </div>
                <div class="col">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#graph-down"/>
                  </svg>
                  <p class="text-muted">Reportes de Trafico con Google Analytic</p>
                </div>
                <div class="col">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#hand-thumbs-up-fill"/>
                  </svg>
                  <p class="text-muted">Posicionamiento SEO para tu sitio web</p>
                </div>
             </div>
        </div>
    </div>
    <!-- planes web -->
    <div class="container">
     <div class="row py-2">
         <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
            <span>Todos nuestros</span>
            <h3 class="display-6 text-info">Planes Incluyen:</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
              </svg>&nbsp; Diseño Personalizado</li>
              <li class="list-group-item">
                <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
              </svg>&nbsp; Contenido adatable Responsive Desing</li>
              <li class="list-group-item">
              <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
              </svg>&nbsp; Certificado de Navegación SSL</li>
              <li class="list-group-item">
                <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                  <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                </svg>&nbsp; Enlaces a redes sociales</li>
              <li class="list-group-item">
                <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                  <use xlink:href="library/icons/bootstrap-icons.svg#arrow-right-circle-fill"/>
                </svg>&nbsp; whatsapp desde tu web</li>
            </ul>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-6 mt-5">
              <div class="container py-4 mt-3">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
         </div>
       </div>
    </div>
    <!-- inicia  acordeon -->
    <div class="container">
        <div class="row py-3">
             <h3 class="display-6 text-primary text-center">+ Servicios</h3>
        </div>
        <div class="row py-2">
          <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#megaphone-fill"/>
                    </svg>  &nbsp;&nbsp;&nbsp;Posicionamiento SEO
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <p class="text-muted">Utilizamos un conjunto de técnicas y de herramientas que sirven para optimizar tanto las paginas webs como landing pages, para que los buscadores, como Google, puedan leerlas de forma mas fácil y rápida.</p>
                      <hr class="text-primary">
                    </div>
                </div>
              </div>
              <div class="accordion-item">
                   <h2 class="accordion-header" id="flush-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                       <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                         <use xlink:href="library/icons/bootstrap-icons.svg#chat-square-quote-fill"/>
                       </svg>  &nbsp;&nbsp;&nbsp;Community Manager
                     </button>
                   </h2>
                   <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <p>Nos encargamos de gestionar y administrar la comunidad en línea de una empresa, crear y mantener conexiones a largo plazo con los clientes, usuarios y fanáticos que quieran la marca en Internet.</p>
                        <hr class="text-primary">
                      </div>
                   </div>
               </div>
               <div class="accordion-item">
                   <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#brush-fill"/>
                        </svg>  &nbsp;&nbsp;&nbsp;Diseño de imagen corporativa
                      </button>
                   </h2>
                   <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                       <div class="accordion-body">
                         <p>Tener una imagen apropiada es algo muy importante y puede ser la diferencia entre dar confianza al cliente o que se vaya a la competencia. Te creamos un logotipo que pueda proyectar el concepto de tu negocio.</p>
                         <hr class="text-primary">
                         <div class="row align-middle">
                             <div class="col-sm-3 col-md-3 col-lg-3">
                                <a href="img/logo1_g_lg.png" class="fancybox" data-fancybox="gallery1"><img src="img/logo1_g.png" class="img-fluid" alt="logo proyecto alphatec"></a>
                             </div>
                             <div class="col-sm-3 col-md-3 col-lg-3">
                                <a href="img/logo2_g_lg.png" class="fancybox" data-fancybox="gallery1"><img src="img/logo2_g.png" class="img-fluid" alt="logo proyecto capacitandot"></a>
                             </div>
                             <div class="col-sm-3 col-md-3 col-lg-3">
                                <a href="img/logo3_g_lg.png" class="fancybox" data-fancybox="gallery1"><img src="img/logo3_g.png" class="img-fluid" alt="logo proyecto mexicayolotl"></a>
                             </div>
                             <div class="col-sm-3 col-md-3 col-lg-3">
                                  <a href="img/logo4_g_lg.png" class="fancybox" data-fancybox="gallery1"><img src="img/logo4_g.png" class="img-fluid" alt="logo proyecto mi princesa"></a>
                             </div>
                         </div>
                       </div>
                    </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="flush-headingFor">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                          <svg class="bi text-warning" width="20" height="20" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#camera-video-fill"/>
                          </svg>  &nbsp;&nbsp;&nbsp;Seguridad Video Vigilancia
                        </button>
                     </h2>
                     <div id="flush-collapseFor" class="accordion-collapse collapse" aria-labelledby="flush-headingFor" data-bs-parent="#accordionFlushExample">
                       <div class="row">
                         <div class="accordion-body">
                                 <div class="row">
                                     <div class="col">
                                       <!-- inicia acordeon -->
                                          <div class="container">
                                            <div id="SeguridadIndicators" class="carousel slide" data-bs-ride="carousel">
                                               <div class="carousel-indicators">
                                                  <button type="button" data-bs-target="#SeguridadIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color:#f26e3a;"></button>
                                                  <button type="button" data-bs-target="#SeguridadIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:#f26e3a;"></button>
                                                  <button type="button" data-bs-target="#SeguridadIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:#f26e3a;"></button>
                                                  <button type="button" data-bs-target="#SeguridadIndicators" data-bs-slide-to="3" aria-label="Slide 4" style="background-color:#f26e3a;"></button>
                                               </div>
                                               <div class="carousel-inner">
                                                   <div class="carousel-item active">
                                                      <img src="img/seguridad1.png" class="d-block w-100" alt="Seguridad1">
                                                   </div>
                                                   <div class="carousel-item">
                                                      <img src="img/seguridad2.png" class="d-block w-100" alt="Seguridad2">
                                                   </div>
                                                   <div class="carousel-item">
                                                      <img src="img/seguridad3.png" class="d-block w-100" alt="Seguridad3">
                                                   </div>
                                                   <div class="carousel-item">
                                                      <img src="img/seguridad4.png" class="d-block w-100" alt="Seguridad3">
                                                   </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#SeguridadIndicators" data-bs-slide="prev">
                                                   <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:rgb(33, 97, 140);"></span>
                                                   <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#SeguridadIndicators" data-bs-slide="next">
                                                   <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:rgb(33, 97, 140);"></span>
                                                   <span class="visually-hidden">Next</span>
                                                </button>
                                              </div>
                                       </div>
                                       <!-- termina acordeon -->
                                     </div>
                                     <div class="col">
                                       2
                                     </div>
                                 </div>
                         </div>
                      </div>
                   </div>
             </div>
        </div>
    </div>
    <!-- termina acordeon -->
   </section>

   <section id="paqueteria">
      <div class="row py-4">

      </div>
   </section>
   <section id="Contacto">
   <div class="row">
     <div class="col-sm-12 col-md-7 col-lg-7 working py-2">
          <h2 class="display-6 text-center text-light py-2">Formulario de Contacto</h2><hr class="text-light">
          <div class="container justify-content-md-center py-3">
             <form action="" method="post">
             <div class="row py-2">
                   <div class="col">
                      <input type="text" name="Nombre" placeholder="Nombre" class="form-control cajas" autocomplete ="off" required>
                   </div>
             </div>
             <div class="row py-2">
                 <div class="col">
                      <input type="tel" name="Telefono" placeholder="Telefono" class="form-control cajas" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  autocomplete ="off" required>
                 </div>
                 <div class="col">
                       <input type="email" name="Email" placeholder="Email" class="form-control cajas" autocomplete ="off" required>
                 </div>
             </div>
             <div class="row py-2">
                   <div class="col">
                      <textarea name="Mensaje" class="form-control cajas" placeholder="Mensaje" autocomplete ="off"></textarea>
                   </div>
             </div>
             <div class="row py-2">
                   <div class="col">
                      <input type="submit" name="contacto" value="Enviar Mensaje" class="btn btn-sm btn-primary">
                   </div>
             </div>
          </form>
          </div>

     </div>
    <div class="col-sm-12 col-md-5 col-lg-5">
        <div id="map"></div>
    </div>
  </div>
  <div class="row">
     <div class="col-sm-12 col-md-12 col-lg-12 shadow">
          <div class="d-flex justify-content-center">
                <div class="row">
                     <div class="col-sm-12 col-md-4 col-lg-4 bg-info text-light py-2 text-center">
                          <a href="https://www.waze.com/es/live-map/directions/mexico/estado-de-mexico/naucalpan-de-juarez/cerrada-del-rosal?place=EkhDZGEuIGRlbCBSb3NhbCwgTWluYXMgUGFsYWNpbywgNTM2OTYgTmF1Y2FscGFuIGRlIEp1w6FyZXosIE3DqXguLCBNZXhpY28iLiosChQKEgltPdY0CQTShRHtz13nTflZgBIUChIJw8zi7w4E0oURNsjep89Wpq8" target="_blank"><img src="img/waze.png" alt="waze" class="img-fluid" style="width:25px;"></a>
                     </div>
                     <div class="col-sm-12 col-md-4 col-lg-4 bg-primary py-2 text-center">
                       <a href="https://www.google.com.mx/maps/place/Cda.+del+Rosal,+Minas+Palacio,+53696+Naucalpan+de+Ju%C3%A1rez,+M%C3%A9x./@19.4420262,-99.2861803,17z/data=!3m1!4b1!4m5!3m4!1s0x85d2040934d63d6d:0x8059f94de75dcfed!8m2!3d19.4420212!4d-99.2839916" target="_blank"><svg class="bi text-light" width="25" height="25" role="img" aria-label="Tools">
                         <use xlink:href="library/icons/bootstrap-icons.svg#geo-alt-fill"/>
                       </svg></a>
                     </div>
                     <div class="col-sm-12 col-md-4 col-lg-4 bg-warning py-2 text-center">
                       <svg class="bi text-light" width="25" height="25" role="img" aria-label="Tools">
                         <use xlink:href="library/icons/bootstrap-icons.svg#signpost-split-fill"/>
                       </svg>
                     </div>
                </div>
          </div>
     </div>
  </div>
</sectio>
<!-- inicia footer -->
<footer class="text-white text-center text-lg-start" style="background-color:rgb(33, 97, 140);">
    <div class="container p-4">
      <div class="row mt-4">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 py-4">
             <div class="row">
               <div class="container py-2">
                 <img src="img/logo_human1_blanco.png" alt="Logo" style="width:300px;">
               </div>
             </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <ul class="list-group" style="margin-left: 1.65em;">
            <li class="mb-3 text-docoration-none">
            <svg class="bi text-light" width="20" height="20" role="img" aria-label="Tools">
              <use xlink:href="library/icons/bootstrap-icons.svg#geo-alt-fill"/>
            </svg> Naucalpan de Juarez
            </li>
            <li class="mb-3">
                <svg class="bi text-light" width="20" height="20" role="img" aria-label="Tools">
                  <use xlink:href="library/icons/bootstrap-icons.svg#mailbox2"/>
                </svg> contacto@capitalhumanworld.com
            </li>
            <li class="mb-3">
              <svg class="bi text-light" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#phone"/>
              </svg> + 55 55 55 55 55
            </li>
            <li class="mb-3">
              <svg class="bi text-light" width="20" height="20" role="img" aria-label="Tools">
                <use xlink:href="library/icons/bootstrap-icons.svg#phone"/>
              </svg> + 55 55 55 55 55
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Horarios de atención</h5>
          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Lunes - Viernes:</td>
                <td>8am - 7pm</td>
              </tr>
              <tr>
                <td>Sabado</td>
                <td>9am - 3pm</td>
              </tr>
            </tbody>
          </table>
          <p>Ingreso a clientes: <a href="login.php" class="text-light text-decoration-none">Aqui</a></p>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:CapitalHunanWorld | IscjlchavezG
    </div>
  </footer>
   <!-- termina footer -->
     <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
     <script src="js/mapa.js"></script>
     <script src="js/preloader.js"></script>
     <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMPGtM7VUn1aq61tkGbu99qD95c-w5zc&callback=initMap"></script>
  </body>
</html>
