<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "online_shop";
    // Membuat Koneksi
    $conn = mysqli_connect($hostname, $username, $password, $database);
    // Memeriksa Koneksi
    if (!$conn) {
        die("koneksi Gagal: " . mysqli_connect_error());
    } 
        echo "Koneksi Berhasil!";
    // Tutup Koneksi
    mysqli_close($conn);
?>