<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css'); ?>">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('index2.html'); ?>" class="h1"><b>Register</b>POLI</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <!-- Menampilkan error jika ada -->
      <?php if($this->session->flashdata('error')): ?>
        <p style="color: red; text-align: center;"><?php echo $this->session->flashdata('error'); ?></p>
      <?php endif; ?>

      <form id="formTambahPasien" onsubmit="event.preventDefault();">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" placeholder="Masukkan Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="no_ktp" placeholder="Masukkan No. KTP" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="no_hp" placeholder="Masukkan No. HP" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="button" class="btn btn-primary btn-block" id="btnSubmit">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="<?= site_url('login'); ?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<script>
  function tambahPasien() {
    var nama = $('#nama').val();
    var alamat = $('#alamat').val();
    var password = $('#password').val();
    var no_ktp = $('#no_ktp').val();
    var no_hp = $('#no_hp').val();

    $.ajax({
      url: '<?= site_url('pasien/tambah'); ?>',
      type: 'POST',
      data: {nama: nama, alamat: alamat, password: password, no_ktp: no_ktp, no_hp: no_hp},
      dataType: 'json',
      success: function(response) {
        if (response.status == 'success') {
          alert('Registration successful!');
          window.location.href = '<?= site_url('login'); ?>';
        } else {
          alert('Error: ' + response.message);
        }
      }
    });
  }

  $('#btnSubmit').click(function() {
    tambahPasien();
  });
</script>
</body>
</html>