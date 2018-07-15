 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/" ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url('admin/masuk_admin') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        
             
          </a>
         
        </li>
        <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo base_url('admin/daftar_pasien') ?>">
            <i class="fa fa-user-plus"></i> <span>Registrasi Pasien</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Rekam Medis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pasien/d_pasien'); ?>"><i class="fa fa-circle-o"></i> Riwayat Rekam Medis</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Rawat Inap</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cube"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('master/m_dokter'); ?>"><i class="fa fa-circle-o"></i>Dokter</a></li>
            <li><a href="<?php echo base_url('master/m_spesialis'); ?>"><i class="fa fa-circle-o"></i>Spesialis</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Paramedis</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Jenjang</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Jabatan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Ruang Rawat Inap</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Kepegawaian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Jabatan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Pegawai</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Pensiun</a></li>
          </ul>
        </li>
        <li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Aset</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Penanggung Jawab</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Inventory</a></li>
          </ul>
        </li>
        <li>

         <li class="sidebar-menu">
        <a href="<?php echo base_url('admin/data_admin') ?>">
          <i class="fa fa-users"></i> <span>User</span>
          <span class="pull-right-container">
           
          </span>
        </a>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
