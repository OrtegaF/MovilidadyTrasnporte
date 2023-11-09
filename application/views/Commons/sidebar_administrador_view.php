 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style= "background: #495057">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="./vendor/dist/img/logos/smt.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #FFFFF;"> <b> SMT Puebla </b></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <a><img src="./vendor/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></a>
        </div>
        <div class="info">
          <b> <a href="<?= base_url('admin_menu')?>" style="color: #FFFFF;"  class="nav-link d-block">Administrador</a> </b>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <b>
            <li class="nav-item">
              <a href="<?= base_url('admin_addCrane')?>" class="nav-link">
                <i style="color: #691b31;" class="fas fa-car"></i>
                <p style="color: #FFFFF;">
                  Corralones
                </p>
              </a>
            </li>
          </b>
          <b>
            <li class="nav-item">
              <a href="<?= base_url('admin_addUsers')?>" class="nav-link">
                <i style="color: #691b31;" class="fas fa-users"></i>
                <p style="color: #FFFFF;">
                  Usuarios
                </p>
              </a>
            </li>
          </b>
          <b>
            <li class="nav-item">
              <a href="<?= base_url('admin_routes')?>" class="nav-link">
              <i style="color: #691b31;" class="fas fa-route"></i>
                <p style="color: #FFFFF;">
                  Marcado de Arrastres
                </p>
              </a>
            </li>
          </b>
          <b>
            <li class="nav-item">
              <a href="<?= base_url('admin_mostcorralones')?>" class="nav-link">
              <i style="color: #691b31;" class="fas fa-map-marked-alt"></i>
                <p style="color: #FFFFF;">
                  Ubicaciones de corralones
                </p>
              </a>
            </li>
          </b>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>