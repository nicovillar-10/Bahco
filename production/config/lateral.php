
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-home"></i> <span>Administración</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- inicio vista rapida del perfil logeado -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hola,</span>
                <h2><?php echo $_SESSION['usuario_logueado']; ?></h2>
              </div>
            </div>
            <!-- /fin vista rapida del perfil logeado -->
            <br /> 
            <!-- inicio barra lateral de menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Inicio</a></li>  
                    </ul>
                  </li>

                  <li class="">
                    <a><i class="fa fa-edit"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.php">Nuevo Evento</a></li>
                      <li><a href="administrar_evento.php">Administrar Evento</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Administrar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="modificar_categoria.php">Administrar Categorías</a></li>
                      <li><a href="administrar_sector.php">Administrar Sector</a></li>
                      <li><a href="administrar_tipo_evento.php">Administrar Tipo de Evento</a></li>
                    </ul>
                  <li><a><i class="fa fa-power-off"></i> Salir <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a onclick="salir()">Salir</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /fin barra lateral de menu -->
              </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script>
          function salir(){
            Swal.fire({
  title: 'Esta seguro?',
  text: "Usted esta por cerrar sesion",
  type: 'info',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Salir!',
  cancelButtonText: 'No, Permanecer' 
}).then((result) => {
  if (result.value) {
    window.location="logout.php";
    
    }
})
          }
        </script>