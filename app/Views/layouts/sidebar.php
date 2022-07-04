<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>/admin/dashboardcontroller" class="brand-link">
      <img src="<?php echo base_url(); ?>/public/assets/dist/img/logogrobogan.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      &nbsp;&nbsp;&nbsp;
      <span class="brand-text font-weight-light">SI KERJA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <!-- <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div> -->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/admin/dashboardcontroller" <?php if($menu == 'Dashboard') { echo 'class="nav-link active"'; } else { echo 'class="nav-link"'; }?> class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li <?php if ($ses_level == 'User') { 
                            
                            echo 'class="nav-header"';
                      } else {
                        echo 'style = "display:none"';
                      }?>>Buat Bon</li>
          <li <?php if ($ses_level == 'User') { 
                            
                              echo 'class="nav-item"';
                        } else {
                          echo 'style = "display:none"';
                        }?>>
            <a href="<?php echo base_url(); ?>/boncontroller" <?php if($menu == 'Bon') {  echo 'class="nav-link active"'; } else { echo 'class="nav-link"' ;} ?> >
              <i class="nav-icon fas fa-book"></i>
              <p>
                Bon
              </p>
            </a>
          </li>
          <li <?php if ($ses_level == 'Admin') { 
                            
                            echo 'class="nav-header"';
                      } else {
                        echo 'style = "display:none"';
                      }?>>Buat Bon</li>
          <li <?php if ($ses_level == 'Admin') { 
                            
                              echo 'class="nav-item menu-close"';
                        } else {
                          echo 'style = "display:none"';
                        }?>>
            <a href="#" <?php if($menu == 'Bon') {  echo 'class="nav-link active"'; } else { echo 'class="nav-link"' ;} ?>>
              <i class="nav-icon fas fa-book"></i>
              <p>
                Bon
              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/boncontroller/tampil/masuk" <?php if($submenu == 'Terima') {  echo 'class="nav-link active"'; } else { echo 'class="nav-link"' ;} ?>>
                  <i class="nav-icon fas fa-receipt"></i>
                  <p>Terima Bon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/boncontroller/tampil/terima" <?php if($submenu == 'Delegasi') {  echo 'class="nav-link active"'; } else { echo 'class="nav-link"' ;} ?>>
                  <i class="nav-icon fas fa-handshake"></i>
                  <p>Delegasikan Bon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/boncontroller/tampil/ongoing" <?php if($submenu == 'Ongoing') {  echo 'class="nav-link active"'; } else { echo 'class="nav-link"' ;} ?>>
                  <i class="nav-icon fas fa-clipboard-check"></i>
                  <p>Selesaikan Bon</p>
                </a>
              </li>
            </ul>
          </li>
          <li <?php if ($ses_level == 'Admin') { 
                            
                            echo 'class="nav-header"';
                      } else {
                        echo 'style = "display:none"';
                      }?>>Laporan
          </li>
          <li  <?php if ($ses_level == 'Admin') { 
                            
                            echo 'class="nav-item"';
                      } else {
                        echo 'style = "display:none"';
                      }?>> 
          <a href="<?php echo base_url(); ?>/boncontroller/tampil/selesai" <?php if($menu == 'Selesai') {  echo 'class="nav-link active"'; } else { echo 'class="nav-link"' ;} ?>>
              <i class="nav-icon fas fa-book"></i>
              <p>
                  Laporan Bon Selesai
              </p>
            </a>
          
          </li>
          <li <?php if ($ses_level == 'Admin') { 
                            
                            echo 'class="nav-header"';
                      } else {
                        echo 'style = "display:none"';
                      }?>>Akun</li>
          <li <?php if ($ses_level == 'Admin' ) { 
                          echo 'class="nav-item"'; 
                        }if ($menu == 'Akun' && $ses_level == 'Admin') {
                          echo 'class="nav-item active"'; 
                        }else if ($ses_level != 'Admin'){
                          echo 'style = "display:none"';
                        }?>>
            <a href="<?php echo base_url(); ?>/accountcontroller" class="nav-link">
              <i class="nav-icon fas fa-solid fa-user-plus"></i>
              <p>
                Akun
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>