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
    <script src="js/push/push.min.js"></script>
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
                                 </svg> Examenes Psicometricos</a></li>
                             <li><a class="dropdown-item" href="#Reclutamiento"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                 </svg> Reclutamiento y selección</a></li>
                             <li><a class="dropdown-item" href="#Perfiles"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-break-fill"/>
                               </svg> Perfiles y descrición de puesto</a></li>
                              <li><a class="dropdown-item" href="#Organigrama"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                     <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                  </svg> Organigrama Empresarial</a>
                              </li>
                              <li><a class="dropdown-item" href="#Manuales"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                     <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                  </svg> Manuales de procedimientos</a>
                              </li>
                              <li><a class="dropdown-item" href="#Contratos"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                     <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                  </svg> Elaboración de contratos</a>
                              </li>
                           </ul>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#envelope-open-fill"/>
                                 </svg> Contacto</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link selectMenu"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#telephone-fill"/>
                               </svg> 55 55 55 55 55</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi text-light" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                                 </svg></a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi text-light" width="17" height="17" role="img" aria-label="Tools">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                                 </svg></a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link"><svg class="bi text-light" width="17" height="17" role="img" aria-label="Tools">
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
                      </svg></span><a href="mailto:contacto@capitalhumanworld.com" class="text-dark text-decoration-none">&nbsp; contacto@capitalhumanworld.com</a> &nbsp; | &nbsp; <span style="color:#2980B9;"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#geo-alt-fill"/>
                      </svg></span> <a href="https://www.waze.com/es/live-map/directions/mexico/estado-de-mexico/naucalpan-de-juarez/conalep-plantel-naucalpan-i?place=ChIJBU_-LvID0oURRBhJfGF1zX0&utm_campaign=waze_website&utm_medium=website_menu&utm_source=waze_website" target="_blank" class="text-dark text-decoration-none">Naucalpan de Juarez Edo de Méx.</a>
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
                         <svg class="bi text-light" width="42" height="42" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#shield-lock-fill"/>
                         </svg>
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
                     <h3 class="display-5 py-3">Nuestras Soluciones</h3><hr>
                     <h5 class="text-muted align-top">Más de 1500 usuarios nos respaldan</h5>
                     <div class="text-center py-4">
                        <a href="#Examenes" class="btn bg-primary bg-gradient btn-sm text-light" id="Examenes" >Más Información</a>
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
                  <div class="row py-3">
                      <div class="container">
                            <div class="text-center">
                              <a href="#" class="btn btn-sm btn-primary">Más Información</a>
                            </div>
                      </div>
                  </div>
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
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                      </svg> Getion de candidatos
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                      </svg> Entrevista por competencia
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                        </svg> Reclutamiento Personalizado
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#award"/>
                      </svg> Selección de talento
                    </li>
                  </ul>
                  <div class="row py-3">
                      <div class="container">
                            <div class="text-center">
                              <a href="#" class="btn btn-sm btn-primary">Más Información</a>
                            </div>
                      </div>
                  </div>
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
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                      </svg> Resumen del Puesto
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                      </svg> Tareas del Puesto
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                          <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                        </svg> Requerimientos
                    </li>
                    <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                      </svg> Otros Aspectos
                    </li>
                  </ul>
                  <div class="row py-3">
                      <div class="container">
                            <div class="text-center">
                              <a href="#" class="btn btn-sm btn-primary">Más Información</a>
                            </div>
                      </div>
                  </div>
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
                  <div class="row py-3">
                      <div class="container">
                            <div class="text-center">
                              <a href="#" class="btn btn-sm btn-primary">Más Información</a>
                            </div>
                      </div>
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
                   <svg class="bi text-light" width="35" height="35" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#headset"/>
                   </svg>
                   <p class="text-light">Via telefonica</p>
                 </div>
                 <div class="col">
                   <svg class="bi text-light" width="35" height="35" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#whatsapp"/>
                   </svg>
                   <p class="text-light">Via whatsapp</p>
                 </div>
                 <div class="col">
                   <svg class="bi text-light" width="35" height="35" role="img" aria-label="Tools">
                     <use xlink:href="library/icons/bootstrap-icons.svg#mailbox2"/>
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
   <section id="Manuales" class="py-4">
       <div class="container">
           <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6">
                <h3 class="display-6" style="color:rgb(33, 97, 140);">Manuales de procedimientos</h3>
                <p class="text-muted text-justify py-2">Te ayudamos a crear un documento del sistema de Control Interno de tu empresa, el cual se crea para obtener una información detallada, ordenada, sistemática e integral que contiene todas las instrucciones, responsabilidades e información sobre políticas, funciones, sistemas y procedimientos de las distintas operaciones.</p>
                <div class="row py-3">
                    <div class="container">
                          <div class="text-center">
                            <a href="#" class="btn btn-sm btn-primary">Más Información</a>
                          </div>
                    </div>
                </div>
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
                    <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                    </svg> Por obra o tiempo determinado
                  </li>
                  <li class="list-group-item list-group-item-action">
                    <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                    </svg> Por tiempo indeterminado
                  </li>
                  <li class="list-group-item list-group-item-action">
                      <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                        <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                      </svg> Periodo de Prueba
                  </li>
                  <li class="list-group-item list-group-item-action">
                    <svg class="bi" width="15" height="15" role="img" aria-label="Tools">
                      <use xlink:href="library/icons/bootstrap-icons.svg#check-circle-fill"/>
                    </svg> Por capacitación inicial
                  </li>
                </ul>
                <div class="container py-3">
                      <div class="text-center">
                        <a href="#" class="btn btn-sm btn-primary">Más Información</a>
                      </div>
                </div>
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
                <div class="container">
                      <div class="text-center py-4">
                        <a href="#" class="btn btn-sm btn-primary">Más Información</a>
                      </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                <img src="img/Archivo.png" alt="Examenes psicometricos">
              </div>
           </div>
       </div>
   </section>
   <!-- inicia session -->
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
             <h3 class="display-6">Opciones dentro de tu web</h3><hr>
             <div class="row">
                <div class="col">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#border-inner"/>
                  </svg>
                  <p class="text-muted">Seleccion de secciones</p>
                </div>
                <div class="col">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#rss-fill"/>
                  </svg>
                  <p class="text-muted">Integración con redes sociales</p>

                </div>
                <div class="col">
                  <svg class="bi text-warning" width="35" height="35" role="img" aria-label="Tools">
                    <use xlink:href="library/icons/bootstrap-icons.svg#palette2"/>
                  </svg>
                  <p class="text-muted">Diseño personalizado</p>
                </div>
                <div class="col">
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
   </section>
   </div>
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
     <script>
     // detectar que existen internet
       if(navigator.onLine) {
         Push.create("Capital Human Wordl",{
              body:"Existe conexión a internet",
              icon:"img/logo_human1.png",
              timeout:7000
         });
        } else {
          Push.create("Capital Human Wordl",{
               body:"En este momento no tienes conexión a internet",
               icon:"img/logo_human1.png",
               timeout:7000
            });
          }
     </script>
  </body>
</html>
