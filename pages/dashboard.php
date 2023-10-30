<?php
session_start();

if (!isset($_SESSION['username'])) {
    // jika user belum login, kembali ke halaman login
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&dispFlay=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      <!-- Tanggal Waktu -->
        <a id="waktu" class="nav-link" data-widget="navbar" href="#" role="button"><?= $hasil_konversi; ?></a>
        <?php
          function konversiTanggalWaktu() {
              date_default_timezone_set('Asia/Jakarta'); 
              $hasil = date('l, j F Y H:i:s');
              return $hasil;
          }
          $hasil_konversi = konversiTanggalWaktu();
      ?>
      </p>
    </nav>
    <!-- /.Tanggal Waktu -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/avatar6.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Putri Deylin</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard -->
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!-- /.Dashboard -->
            <!-- Product Variabel -->
            <li class="nav-item">
              <a href="produk-variabel.php" class="nav-link active">
                <i class="nav-icon 	fas fa-shopping-cart"></i>
                <p>
                  Product Variabel
                </p>
              </a>
            </li>
            <!-- /.Product Variabel -->
             <!-- Product Loop -->
             <li class="nav-item">
              <a href="produk-loop.php" class="nav-link active">
                <i class="nav-icon 	fas fa-shopping-cart"></i>
                <p>
                  Product Loop
                </p>
              </a>
            </li>
            <!-- /.Product Loop -->
            <!-- CRUD Product -->
            <li class="nav-item">
              <a href="pos-shop.php" class="nav-link active">
                <i class="nav-icon 	fas fa-shopping-cart"></i>
                <p>
                  CRUD Products
                </p>
              </a>
            </li>
            <!-- /.CRUD Product -->
            <!-- Pelanggan -->
            <li class="nav-item">
              <a href="pelanggan.php" class="nav-link active">
                <i class="nav-icon 	fas fa-users"></i>
                <p>
                  Customers
                </p>
              </a>
            </li>
            <!-- /.Pelanggan -->
            <!-- Vendors -->
            <li class="nav-item">
              <a href="vendors.php" class="nav-link active">
                <i class="nav-icon 	fas fa-chart-pie"></i>
                <p>
                  Vendors
                </p>
              </a>
            </li>
            <!-- /.Vendors -->
             <!-- Logout -->
             <li class="nav-item">
              <a href="logout.php" class="nav-link active">
                <i class="nav-icon 	fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
            <!-- /.Logout -->
            <!-- /.sidebar-menu -->
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      $conn = mysqli_connect("localhost", "root", "", "pos_shop");

          // Koneksi 
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          // Query select data
          $query = "SELECT * FROM dashboard_data";
          $result = mysqli_query($conn, $query);

          $product_count = $customer_count = $vendor_count = 0; 

          if ($result) {
              $data = mysqli_fetch_assoc($result);
              $product_count = $data['product_count'];
              $customer_count = $data['customer_count'];
              $vendor_count = $data['vendor_count'];
          } else {
            echo "Data tidak ditemukan.";
          }

          // Tutup koneksi
          mysqli_close($conn);
          ?>
          
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-9">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $product_count; ?></h3>

                <p>Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-9">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $customer_count; ?></h3>

                <p>Customers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-9">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $vendor_count; ?></h3>

                <p>Vendors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="bodymain">
            <img src="../dist/img/bg.jpg" class="img-fluid" alt="bg">
          </div>
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../dist/js/pages/dashboard.js"></script>
  <!-- Script Tanggal Waktu -->
  <script type="text/javascript">
            function perbaruiWaktu() {
                const waktuElemen = document.getElementById('waktu');
                const sekarang = new Date();
                const hari = sekarang.toLocaleString('id-ID', { weekday: 'long' });
                const tanggal = sekarang.getDate();
                const bulan = sekarang.toLocaleString('id-ID', { month: 'long' });
                const tahun = sekarang.getFullYear();
                const jam = sekarang.getHours();
                const menit = sekarang.getMinutes();
                const detik = sekarang.getSeconds();
                
                const hasil = `${hari}, ${tanggal} ${bulan} ${tahun} ${jam}:${menit}:${detik}`;
                waktuElemen.textContent = hasil;
            }

            // Perbarui waktu setiap detik
            setInterval(perbaruiWaktu, 1000);

            // Pemanggilan pertama
            perbaruiWaktu();
        </script>
</body>

</html>