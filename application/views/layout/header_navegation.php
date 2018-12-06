<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo para sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>M</b>i</span>
        <!-- logo para estado normal o para dipositivos moviles -->
        <span class="logo-lg">Mi <b>Tienda</b></span>
    </a>

    <!-- Cabecera del Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Botón Sidebar toggle-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Mensajes (icono): El estilo se puede encontrar en el menú desplegable.-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"04</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Bandeja vacia</li>
                        <li>
                            <!-- Menú interno: contiene los datos reales. -->
                            <ul class="menu">
                                <!-- Empieza ficha de mensajes -->
                                <li>
                                  <a href="#">
                                      <div class="pull-left">
                                          <img src="assets/images/usuario.jpg" class="img-circle" alt="User Image">
                                      </div>
                                      <h4>
                                          Example
                                          <small><i class="fa fa-clock-o"></i> hace 5 min</small>
                                      </h4>
                                      <p>Texto del mensaje</p>
                                  </a>
                                </li>
                                <!-- Termina ficha de mensajes -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Ver todos los mensajes</a></li>
                    </ul>
                </li>

                <!-- Notificaciones (icono): El estilo se puede encontrar en el menú desplegable. -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">0</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">No hay notificaciones</li>
                        <li>
                            <ul class="menu">
                                <li><a href="#"><i class="fa fa-users text-aqua"></i> Notificacion demo</a></li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>

                <!-- Cuenta del usuario: El estilo se puede encontrar en el menú desplegable. -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/usuario.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $nombreUsuario; ?></span>
                    </a>
                  <ul class="dropdown-menu">
                      <!-- Imagen y datos basicos del usuario -->
                      <li class="user-header">
                          <img src="assets/images/usuario.jpg" class="img-circle" alt="User Image">
                          <p>
                              <?php echo $nombreUsuario; ?>
                              <small><?php echo $correoUsuario ?></small>
                          </p>
                      </li>

                      <!-- Final del Menu -->
                      <li class="user-footer">
                          <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Ver perfil</a>
                          </div>
                          <div class="pull-right">
                              <a href="/login/signOff" class="btn btn-default btn-flat">Cerrar sesión</a>
                          </div>
                      </li>
                  </ul>
                </li>

                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
