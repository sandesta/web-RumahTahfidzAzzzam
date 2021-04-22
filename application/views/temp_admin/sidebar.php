<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="<?=base_url('assets/img/logorta.jpg')?>" class="img-fluid" alt="Responsive image" style="width: 70%">
        </div>
        <div class="sidebar-brand-text mx-2">RUMAH TAHFIDZ AZZAM</div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider">

        <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="<?php if($this->uri->segment(2)=="dashboard"){echo"active";} ?> nav-item">
        <a class="nav-link" href="<?=base_url('admin/dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Data Menu -->      
      <li class="<?php if($this->uri->segment(2)=="santri" || $this->uri->segment(2)=="kelas" || $this->uri->segment(2)=="tahun_ajaran" || $this->uri->segment(2)=="pengurus" || $this->uri->segment(2)=="jabatan"){echo "active";}?>  nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAgen" aria-expanded="true" aria-controls="collapseAgen">
           <i class="fas fa-fw fa-folder"></i>
          <span>Master Data</span> 
        </a>
        <div id="collapseAgen" class="collapse" aria-labelledby="headingAgen" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Input</h6>
            <a class="<?php if($this->uri->segment(2)=="santri"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/santri')?>">Santri</a>

            <a class="<?php if($this->uri->segment(2)=="kelas"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/kelas')?>">Kelas</a>

            <a class="<?php if($this->uri->segment(2)=="tahun_ajaran"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/tahun_ajaran')?>">Tahun Ajaran</a>

            <a class="<?php if($this->uri->segment(2)=="pengurus"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/pengurus')?>">Pengurus</a>

            <a class="<?php if($this->uri->segment(2)=="jabatan"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/jabatan')?>">Jabatan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="<?php if($this->uri->segment(2)=="identitas"|| $this->uri->segment(2)=="tentang"|| $this->uri->segment(2)=="galeri"){echo"active";} ?> nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages1">
          <i class="fas fa-fw fa-folder"></i></i>
          <span>Master Website</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Input</h6>
            <a class="<?php if($this->uri->segment(2)=="identitas"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/identitas')?>">Identitas Web</a>

            <a class="<?php if($this->uri->segment(2)=="tentang"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/tentang')?>">Tentang Web</a>

            <a class="<?php if($this->uri->segment(2)=="galeri"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/galeri')?>">Galeri Web</a>
          </div>
        </div>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Setelan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="<?php if($this->uri->segment(2)=="myprofil"|| $this->uri->segment(2)=="gantipassword"){echo"active";} ?> nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-cog"></i></i>
          <span>Pengaturan Admin</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengaturan</h6>
            <a class="<?php if($this->uri->segment(2)=="myprofil"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/myprofil')?>">My Profil</a>

            <a class="<?php if($this->uri->segment(2)=="gantipassword"){echo"active";} ?>
            collapse-item" href="<?=base_url('admin/gantipassword')?>">Ganti Password</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

       <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>
      <!-- Nav Item - User logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
            </li>

            <!-- Nav Item - view wwb -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link" href="<?=base_url('landing_page');?>" target="_blank" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" title="View Web">
                <i class="fas fa-globe"></i>
                <!-- Counter - view wwb -->
              </a>
            </li>
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?=$user['nama'];?></span>
            
                <img class="img-profile rounded-circle" src="
                <?=base_url('assets/img/'). $user['foto']?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?=base_url('admin/myprofil')?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  My Profile
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


