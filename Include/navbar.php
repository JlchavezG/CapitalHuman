<!-- inicia el navbar -->
<div class="row">
       <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow" id="menu">
           <div class="container-fluid">
               <div class="d-flex flex-grow-1">
                    <span class="w-100 d-lg-none d-block">
                    <!-- cuando el menu sea responsive la marca se centrara --></span>
                    <a class="navbar-brand" href="clientes.php">
                      <img src="img/logo_human1.png" style="width:150px;"></a>
                    <div class="w-100 text-right">
                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbarJl">
                          <span class="navbar-toggler-icon"></span>
                       </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbarJl">
                   <ul class="navbar-nav ms-auto flex-nowrap">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle selectMenu text-muted" href="#Soluciones" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Bienvenido: <?php echo $user['Nombre']; ?>&nbsp;&nbsp;<img src="img/user/<?php echo $user['Imagen']; ?>" alt="Perfil" style="width:30px; border-radius:50%;">
                        </a>
                      <ul class="dropdown-menu menus" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Perfil.php"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-badge"/>
                          </svg> Perfil</a></li>
                        <li><a class="dropdown-item" href="configuracion.php"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill"/>
                          </svg> Configuración</a></li>
                        <li><a class="dropdown-item" href="include/cerrar.php"><svg class="bi" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#door-open-fill"/>
                          </svg> Salir</a></li>
                      </ul>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="nav-link"><svg class="bi text-muted" width="17" height="17" role="img" aria-label="Tools">
                            <use xlink:href="library/icons/bootstrap-icons.svg#bell-fill"/>
                          </svg>
                          <span class="top-0 start-100 translate-middle badge rounded-pill bg-danger text-wrap">1<span class="visually-hidden">Mensajes no leidos</span>
                          </span>
                          </a>
                     </li>
                      <li class="nav-item">
                         <a href="#" class="nav-link"><svg class="bi text-muted" width="17" height="17" role="img" aria-label="Tools">
                             <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                             </svg></a>
                      </li>
                      <li class="nav-item">
                         <a href="#" class="nav-link"><svg class="bi text-muted" width="17" height="17" role="img" aria-label="Tools">
                             <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                             </svg></a>
                      </li>
                      <li class="nav-item">
                         <a href="#" class="nav-link"><svg class="bi text-muted" width="17" height="17" role="img" aria-label="Tools">
                             <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                             </svg></a>
                      </li>
                    </ul>
                 </div>
             </div>
          </nav>
  </div>
<!-- termina el navbar -->
