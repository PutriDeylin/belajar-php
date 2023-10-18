<?php
// Koneksi ke database
include 'koneksi-posshop.php';
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data produk berdasarkan 'id'
    $sql = "SELECT id, product_name, category_id, product_code, description, price, stock FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $product_name = $row['product_name'];
        $category_id = $row['category_id'];
        $product_code = $row['product_code'];
        $description = $row['description'];
        $price = $row['price'];
        $stock = $row['stock'];
    } else {
        echo "Produk tidak ditemukan.";
    }
    $conn->close();
} else {
    echo "ID Produk tidak ditemukan.";
}
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
                        <h1>Product Tugas 17</h1>
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="proses-edit.php" method="post">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="product_id">Product Id:</label>
                                    <input type="text" id="product_id" name="product_id" class="form-control" value="<?php echo $product_id; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_name">Product Name:</label>
                                    <input type="text" id="product_name" name="product_name" class="form-control" value="<?php echo $product_name; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category ID:</label>
                                    <input type="text" id="category_id" name="category_id" class="form-control" value="<?php echo $category_id; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_code">Product Code:</label>
                                    <input type="text" id="product_code" name="product_code" class="form-control" value="<?php echo $product_code; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" id="description" name="description" class="form-control" value="<?php echo $description; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="text" id="price" name="price" class="form-control" value="<?php echo $price; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock:</label>
                                    <input type="text" id="stock" name="stock" class="form-control" value="<?php echo $stock; ?>" required>
                                </div>
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
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
</body>

</html>