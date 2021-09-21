<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Inicio | Huishilopostli Soft</title>
</head>
<body>
<div class="row bg-dark text-light">
   <div class="col-sm-1 col-md-2 col-lg-4"></div>
   <div class="col-sm-1 col-md-2 col-lg-4"></div>
   <div class="col-sm-10 col-md-8 col-lg-4">
     <svg class="bi" width="16" height="16" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#phone-vibrate"/>
     </svg> Telefono: 55-55-55-55 | Email: contacto@tuemail.com</div>
</div>
<!-- inicia mi nabvar de la pagina web -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/Logo_isc.png" alt="" style="width:60px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
           <ul class="navbar-nav">
              <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="#">
                   <svg class="bi" width="16" height="16" fill="currentColor">
                       <use xlink:href="library/icons/bootstrap-icons.svg#person-bounding-box"/>
                   </svg> Conocenos</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#"><svg class="bi" width="16" height="16" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#building"/>
                 </svg> Nuestros Clientes</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#">
                   <svg class="bi" width="16" height="16" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#cpu-fill"/>
                   </svg> Proyectos</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="bi" width="16" height="16" fill="currentColor">
                      <use xlink:href="library/icons/bootstrap-icons.svg#cart-plus-fill"/>
                    </svg> Servicios
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <li><a class="dropdown-item" href="#">
                       <svg class="bi" width="15" height="15" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#shield-fill-check"/>
                       </svg> Seguridad Informática</a></li>
                     <li><a class="dropdown-item" href="#">
                       <svg class="bi" width="15" height="15" fill="currentColor">
                           <use xlink:href="library/icons/bootstrap-icons.svg#diagram-3-fill"/>
                       </svg> Instalación de Redes</a></li>
                     <li><a class="dropdown-item" href="#">Configuración de Redes</a></li>
                     <li><a class="dropdown-item" href="#">Aplicaciones Mobiles</a></li>
                     <li><a class="dropdown-item" href="#">Aplicaciones Web</a></li>
                  </ul>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#"> Nuestro Equipo</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#"> Contacto</a>
             </li>
          </ul>
      </div>
    </div>
</nav>
<!-- termina mi navbar -->
<!-- Inicia mi slider -->
<div id="CarruselPrincipal" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#CarruselPrincipal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#CarruselPrincipal" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#CarruselPrincipal" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#CarruselPrincipal" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/sliderweb1.png" class="d-block w-100" alt="Configuración de redes">
    </div>
    <div class="carousel-item">
      <img src="img/sliderweb2.png" class="d-block w-100" alt="Seguridad Informatica">
    </div>
    <div class="carousel-item">
      <img src="img/sliderweb3.png" class="d-block w-100" alt="Creacion de Base de datos">
    </div>
    <div class="carousel-item">
      <img src="img/sliderweb4.png" class="d-block w-100" alt="Diseño web">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#CarruselPrincipal" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#CarruselPrincipal" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- termina slider-->
<!-- servicios -->
<div class="container py-4">
   <div class="row">
         <div class="col-sm-12 col-md-6 col-lg-3 py-2">
           <div class="card" style="width: 20rem;">
              <img src="img/Logo_isc.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <p class="card-text">Primer Servicio.</p>
              </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-3 py-2">
           <div class="card" style="width: 20rem;">
             <svg class="bi" width="240" height="240" fill="currentColor">
                 <use xlink:href="library/icons/bootstrap-icons.svg#diagram-3-fill"/>
             </svg>
              <div class="card-body">
                  <p class="card-text">Segundo Servicio.</p>
              </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-3 py-2">
           <div class="card" style="width: 20rem;">
              <img src="img/Logo_isc.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <p class="card-text">Tercero Servicio.</p>
              </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-3 py-2">
           <div class="card" style="width: 20rem;">
              <img src="img/Logo_isc.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <p class="card-text">Cuarto Servicio.</p>
              </div>
            </div>
         </div>
     </div>
</div>
<!-- termina servicios -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
