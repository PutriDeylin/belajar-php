<?php
session_start();

// Username & password 
$username = "adminputri";
$password = "7202311";
 
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
        // Autentikasi gagal, tetap dihalaman login dan tampilkan pesan error
        header("Location: login-redirect.php?error=1");
        exit(); 
    }
}
?>