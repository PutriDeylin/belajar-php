<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pos_shop";
    // Membuat Koneksi
    $conn = mysqli_connect($hostname, $username, $password, $database);
    // Memeriksa Koneksi
    if (!$conn) {
        die("koneksi Gagal: " . mysqli_connect_error());
    } 
?>