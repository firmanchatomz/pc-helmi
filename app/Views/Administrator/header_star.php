<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Informasi PLN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href=<?= base_url('theme/staradmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')?>>
  <link rel="stylesheet" href=<?= base_url('theme/staradmin/vendors/css/vendor.bundle.base.css')?>>
  <link rel="stylesheet" href=<?= base_url('theme/staradmin/vendors/css/vendor.bundle.addons.css')?>>

  <link rel="stylesheet" href=<?= base_url('theme/staradmin/vendors/iconfonts/font-awesome/css/font-awesome.css')?>>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=<?= base_url('theme/staradmin/css/style.css')?>>

  <script type='text/javascript' src="<?= base_url('tinymce/js/tinymce/tinymce.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('j-query/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('chartjs/Chart.min.js')?>"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script type='text/javascript'> 
  tinymce.init({ selector:'.berita', menubar:'', theme: 'modern'});
  </script>
  <!-- endinject -->
  <link rel="shortcut icon" href=<?= base_url('assets/img/fc.ico')?>>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src=<?= base_url('assets/img/'.$setting->logo)?> alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url('admin') ?>">
          <img src=<?= base_url('theme/staradmin/images/logo-mini.svg')?> alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <h4><?= $setting->nama_aplikasi ?></h4>
              <!-- <span class="badge badge-primary ml-1">New</span> -->
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text text-capitalize">Selamat Datang, <?= $admin->nama ?> !</span>
              <img class="img-xs rounded-circle" src=<?= base_url('assets/img/pln.jpg')?> alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
         <!--      <a class="dropdown-item">
                Change Password
              </a> -->
            <!--   <a class="dropdown-item">
                Check Inbox
              </a> -->
              <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">
                Keluar
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src=<?= base_url('assets/img/pln.jpg')?> alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name text-capitalize"><?= $admin->nama ?></p>
                  <div>
                    <small class="designation text-muted text-uppercase"><?= $admin->nama_user ?></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a href="<?= base_url('admin/tambahrnd') ?>" class="btn btn-success btn-block">Tambah Data RAB
                <i class="mdi mdi-plus"></i>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?= base_url('admin')?>>
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href=<?= base_url('admin/lihatrnd')?>>Data Rab dan Nota Dinas</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href=<?= base_url('admin/lihatkontrak')?>>Data Kontrak</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href=<?= base_url('admin/lihatpembayaran')?>>Data Pembayaran</a>
                </li>
              </ul>
            </div>
          </li>

    <!--       <li class="nav-item">
            <a class="nav-link" href=<?= base_url('admin/lihatrw')?>>
              <i class="menu-icon mdi mdi-account-multiple"></i>
              <span class="menu-title">Data RW</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href=<?= base_url('admin/setting')?>>
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Pengaturan</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">