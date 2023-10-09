<?php
session_start();

// Username & password 
$username = "adminputri";
$password = "7202331";
 
    // Periksa apakah form login telah dikirim
    if (isset($_POST["username"]) && isset($_POST["password"])) {  

    // Menangkap nilai yang dikirimkan melalui form
    $inputUser = $_POST["username"];
    $inputPass = $_POST["password"];

    // Periksa apakah inputan sesuai dengan username dan password 
    if ($inputUser == $username && $inputPass == $password) {
        // Autentikasi berhasil
        $_SESSION["username"] = $inputUser;

        // Redirect ke halaman dashboard
        header("Location: ../dashboard.php");
        exit();
    } else {
        /* Autentikasi gagal, jika ingin tetap dihalaman login
        header("Location: login-redirect.php");
        exit(); */

        /* Autentikasi gagal, tampilkan pesan error
        $errorMessage = "Incorrect username or password!"; */

        // Autentikasi gagal, tampilkan pesan error
        $errorMessage = "Incorrect username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/loginredirect.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Putri</b>Shop</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in with your username and password</p>

                <form method="post" action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form><br>
                <div class="text-center mx-auto">
                <?php
                if (isset($errorMessage)) {
                    echo '<p class="text-danger">'.$errorMessage.'</p>';
                }
                ?>
                </div>
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                      <i class="fab fa-google mr-2"></i> Sign in using Google
                    </a>
                    <a href="#" class="btn btn-block btn-success">
                      <i class="fab fa-whatsapp mr-2"></i> Sign in using Whatsapp
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.php">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.php" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../..../dist/js/adminlte.min.js"></script>
</body>

</html>