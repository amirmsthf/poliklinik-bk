<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Dokter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.min.css'); ?>">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">

      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="<?= base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Poliklinik</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/dist/img/logo2.png'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">
    <?php 
        // Cek apakah nama pengguna ada di session, jika ada tampilkan
        echo $this->session->userdata('nama') ?: 'Pengguna'; 
    ?>
</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="#" class="nav-link" id="kelola-pasien">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>Kelola Pasien</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="kelola-dokter">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>Kelola Dokter</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="kelola-poli">
              <i class="nav-icon fas fa-book"></i>
              <p>Kelola Poli</p>
            </a>
          </li>
        </ul>
        <li class="nav-item">
        <a href="<?= site_url('auth/logout'); ?>" class="btn btn-primary">Logout</a>
        </li>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <div class="content-header">
      <h1 class="m-0">&nbsp;</h1>
    </div>

    <!-- Static Content Section -->
    <section class="content">
      <div class="container-fluid" id="main-content">
        <!-- Konten yang akan di-load menggunakan AJAX -->
        <!-- <h1>&nbsp;&nbsp;Welcome to Dokter Page!</h1> -->
        <!-- <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selamat datang di dashboard Dokter. Pilih menu di sidebar untuk mengelola.</p> -->
      </div>

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/dist/js/adminlte.min.js'); ?>"></script>

<script>
    // Fungsi untuk load konten menggunakan AJAX - Kelola Pasien
    $('#kelola-pasien').click(function() {
        $('#main-content').html('<h3>Memuat data pasien...</h3>'); // Menampilkan loading

        // Gunakan AJAX untuk mengubah konten
        $.ajax({
            url: '<?php echo site_url("dashboard/load_kelola_pasien"); ?>', // URL untuk mengambil data pasien
            method: 'GET',
            success: function(response) {
                $('#main-content').html(response); // Ganti konten dengan data dari server
            },
            error: function() {
                $('#main-content').html('<p>Error saat memuat data. Coba lagi.</p>');
            }
        });
    });

    // Fungsi untuk load konten menggunakan AJAX - Kelola Poli
    $('#kelola-poli').click(function() {
        $('#main-content').html('<h3>Memuat data poli...</h3>'); // Menampilkan loading

        // Gunakan AJAX untuk mengubah konten
        $.ajax({
            url: '<?php echo site_url("dashboard/load_kelola_poli"); ?>', // URL untuk mengambil data poli
            method: 'GET',
            success: function(response) {
                $('#main-content').html(response); // Ganti konten dengan data dari server
            },
            error: function() {
                $('#main-content').html('<p>Error saat memuat data. Coba lagi.</p>');
            }
        });
    });

    // Fungsi untuk load konten menggunakan AJAX - Kelola Obat
    $('#kelola-obat').click(function() {
        $('#main-content').html('<h3>Memuat data obat...</h3>'); // Menampilkan loading

        // Gunakan AJAX untuk mengubah konten
        $.ajax({
            url: '<?php echo site_url("dashboard/load_kelola_obat"); ?>', // URL untuk mengambil data poli
            method: 'GET',
            success: function(response) {
                $('#main-content').html(response); // Ganti konten dengan data dari server
            },
            error: function() {
                $('#main-content').html('<p>Error saat memuat data. Coba lagi.</p>');
            }
        });
    });

    // Fungsi untuk load konten menggunakan AJAX - Kelola Dokter
    $('#kelola-dokter').click(function() {
        $('#main-content').html('<h3>Memuat data dokter...</h3>'); // Menampilkan loading

        // Gunakan AJAX untuk mengubah konten
        $.ajax({
            url: '<?php echo site_url("dashboard/load_kelola_dokter"); ?>', // URL untuk mengambil data poli
            method: 'GET',
            success: function(response) {
                $('#main-content').html(response); // Ganti konten dengan data dari server
            },
            error: function() {
                $('#main-content').html('<p>Error saat memuat data. Coba lagi.</p>');
            }
        });
    });
</script>

</body>
</html>
