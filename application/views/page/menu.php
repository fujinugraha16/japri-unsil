<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion fixed-top z-index-1" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center my-2" href="<?= base_url(); ?>">
    <div class="sidebar-brand-icon">
      <?php $this->load->view('svg/logo_japri'); ?>
    </div>
    <div class="sidebar-brand-text mx-3"> </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('crew'); ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Crew</span></a>
  </li>


  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('transaksi'); ?>">
      <i class="fas fa-fw fa-money-check-alt"></i>
      <span>Transaksi</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('ledger'); ?>">
      <i class="fas fa-fw fa-book"></i>
      <span>Ledger</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('harga'); ?>">
      <i class="fas fa-fw fa-dollar-sign"></i>
      <span>Harga Barang</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('diskon'); ?>">
      <i class="fas fa-fw fa-percent"></i>
      <span>Diskon</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
      <i class="fas fa-fw fa-users-cog"></i>
      <span>Admin</span>
    </a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <div class="sidebar-heading">
    Admin
  </div>

  <li class="nav-item">
    <a class="nav-link logout" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span>
    </a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <!-- <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div> -->

</ul>