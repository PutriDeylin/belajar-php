<?php
    // Array Loop Data Produk
    $produkrow1 = [
        [
            'gambar' => '../dist/img/1.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp200.000'
        ],

        [
            'gambar' => '../dist/img/2.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp250.000'
        ],
        [
            'gambar' => '../dist/img/3.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp300.000'
        ],

        [
            'gambar' => '../dist/img/4.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp300.000'
        ],
        
    ];

    $produkrow2 = [
        [
            'gambar' => '../dist/img/5.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp500.000'
        ],

        [
            'gambar' => '../dist/img/6.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp150.000'
        ],
        [
            'gambar' => '../dist/img/7.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp170.000'
        ],

        [
            'gambar' => '../dist/img/8.jpg',
            'nama'   => 'Sepatu Kets Wanita Casual',
            'ukuran' => '36, 37, 38, 39, 40',
            'harga'  => 'Rp180.000'
        ],
        
    ];
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
                            <a href="../dashboard.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <!-- /.Dashboard -->
                        <!-- Product Variabel -->
                        <li class="nav-item">
                        <a href="produkvariabel.php" class="nav-link active">
                            <i class="nav-icon 	fas fa-shopping-cart"></i>
                            <p>
                                Product Variabel
                            </p>
                        </a>
                        </li>
                        <!-- /.Product Variabel -->
                        <!-- Product -->
                        <li class="nav-item">
                            <a href="produkarrayloop.php" class="nav-link active">
                                <i class="nav-icon 	fas fa-shopping-cart"></i>
                                <p>
                                    Product Array Loop
                                </p>
                            </a>
                        </li>
                        <!-- /.Product -->
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
                            <h1>Product Tugas 14</h1>
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
                                    <h4 class="card-title">Produk Array Loop</h4>
                                </div>
                                <!-- product -->
                                <div class="card-body">
                                    <div class="card-deck">
                                        <?php
                                            // Loop untuk menampilkan produk
                                            foreach ($produkrow1 as $value) {
                                                echo '<div class="card">';
                                                echo '<img src="'.$value['gambar'].'"class="card-img-top" alt="...">';
                                                echo '<div class="card-body">';
                                                echo '<h5 class="card-title">'.$value['nama'].'</h5>';
                                                echo '<p class="card-text">Ukuran '. $value['ukuran'].'</p>';
                                                echo '<p>'.$value['harga'].'</p>';
                                                echo '<a href="#" class="btn btn-secondary">Beli</a>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>

                                <div class="card-body">
                                    <div class="card-deck">
                                        <?php
                                            // Loop untuk menampilkan produk
                                            foreach ($produkrow2 as $value) {
                                                echo '<div class="card">';
                                                echo '<img src="'.$value['gambar'].'"class="card-img-top" alt="...">';
                                                echo '<div class="card-body">';
                                                echo '<h5 class="card-title">'.$value['nama'].'</h5>';
                                                echo '<p class="card-text">Ukuran '.$value['ukuran'].'</p>';
                                                echo '<p>'.$value['harga'].'</p>';
                                                echo '<a href="#" class="btn btn-secondary">Beli</a>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
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