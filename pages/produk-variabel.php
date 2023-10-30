<?php
    // Variabel Data Produk
    $gambar = array('../dist/img/1.jpg',"../dist/img/2.jpg","../dist/img/3.jpg","../dist/img/4.jpg","../dist/img/5.jpg","../dist/img/6.jpg","../dist/img/7.jpg","../dist/img/8.jpg");
    $nama = array("Sepatu Kets Wanita Casual","Sepatu Kets Wanita Casual","Sepatu Kets Wanita Casual","Sepatu Kets Wanita Casual","Sepatu Kets Wanita Casual","Sepatu Kets Wanita Casual","Sepatu Kets Wanita Casual","Sepatu Kets Wanita Casual");
    $ukuran = array("36, 37, 38, 39, 40","36, 37, 38, 39, 40","36, 37, 38, 39, 40","36, 37, 38, 39, 40","36, 37, 38, 39, 40","36, 37, 38, 39, 40","36, 37, 38, 39, 40","36, 37, 38, 39, 40");
    $harga = array("Rp200.000","Rp250.000","Rp300.000","Rp300.000","Rp500.000","Rp150.000","Rp170.000","Rp180.000");
?>
                            
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Product</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Card Produk style -->
    <link rel="stylesheet" href="../dist/css/cardproduk.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto"></ul>
        </nav>
        <!-- /.navbar -->

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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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
                            <a href="login-redirect.php" class="nav-link active">
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Product Tugas 13</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Product</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h4 class="card-title">Produk Variabel</h4>
                                </div>
                                <!-- product -->
                                <div class="card-body">
                                    <div class="card-deck">
                                        <div class="card">
                                            <img src="<?php echo $gambar[0]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[0]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[0]; ?></p>
                                                <p><?php echo $harga[0]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[1]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[1]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[1]; ?></p>
                                                <p><?php echo $harga[1]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[2]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[2]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[2]; ?></p>
                                                <p><?php echo $harga[2]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[3]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[3]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[3]; ?></p>
                                                <p><?php echo $harga[3]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="card-deck">
                                        <div class="card">
                                            <img src="<?php echo $gambar[4]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[4]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[4]; ?></p>
                                                <p><?php echo $harga[4]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[5]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[5]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[5]; ?></p>
                                                <p><?php echo $harga[5]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[6]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[6]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[6]; ?></p>
                                                <p><?php echo $harga[6]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="<?php echo $gambar[7]; ?>" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $nama[7]; ?></h5>
                                                <p class="card-text">Ukuran <?php echo $ukuran[7]; ?></p>
                                                <p><?php echo $harga[7]; ?></p>
                                                <a href="#" class="btn btn-secondary">Beli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir Product -->
                            </div>
                        </div>
                    </div>
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
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Ekko Lightbox -->
    <script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- Filterizr-->
    <script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
</body>

</html>