  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style= "background: #495057">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="./vendor/dist/img/logos/smt.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #FFFFF;"> <b> SMT Puebla </b></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./vendor/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <b><a href="<?= base_url('corraloneros_menu')?>" style="color: #FFFFF;"  class="nav-link d-block">Corralonero</a> </b>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <b>
            <li class="nav-item">
              <a href="<?= base_url('add_cranesG')?>" class="nav-link">
                <i style="color: #691b31;" class="fas fa-info-circle"></i>
                <p style="color: #FFFFF;">
                  Gruas
                </p>
              </a>
            </li>
          </b>
          <b>
            <li class="nav-item">
              <a href="<?= base_url('add_drag')?>" class="nav-link">
                <i style="color: #691b31;" class="fas fa-car-crash"></i>
                <p style="color: #FFFFF;">
                  Arrastres
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