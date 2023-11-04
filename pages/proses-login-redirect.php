<?php
session_start();
include '../oop/Database.php';
include '../oop/User.php';

$database = new Database();
$connection = $database->getConnection();

$user = new User($connection);

$username = $_POST['username'];
$password = $_POST['password'];

$storedUser = $user->login($username);

if ($storedUser) {
    $stored_password = $storedUser['password'];

    if ($password === $stored_password || password_verify($password, $stored_password)) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: ../index.php?login_failed=1");
        exit();
    }
} else {
    header("Location: ../index.php?login_failed=1");
    exit();
}

// Tutup koneksi database
$database->closeConnection();
?>

// Tanpa OOP
session_start();
// Koneksi ke database
include 'koneksi-posshop.php';

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row['password'];

    // Cek jika kata sandi sesuai dengan salah satu cara
    if ($password === $stored_password || password_verify($password, $stored_password)) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal
        header("Location: ../index.php?login_failed=1");
        exit();
    }
} else {
    // Pengguna tidak ditemukan
    header("Location: ../index.php?login_failed=1");
    exit();
}

// Tutup koneksi database
mysqli_close($connection);


// Data Statis
//session_start();

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
