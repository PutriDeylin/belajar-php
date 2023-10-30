<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "pos_shop";
    // Membuat Koneksi
    $connection = mysqli_connect($hostname, $username, $password, $database);
    // Memeriksa Koneksi
    if (!$connection) {
        die("koneksi Gagal: " . mysqli_connect_error());
    } 
?>