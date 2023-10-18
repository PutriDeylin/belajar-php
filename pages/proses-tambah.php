<?php
// Koneksi ke database
include 'koneksi-posshop.php';

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengekstrak data dari form
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
$product_code = $_POST['product_code'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];

// SQL untuk menyimpan data
$sql = "INSERT INTO products (product_name, category_id, product_code, description, price, stock) VALUES ('$product_name', '$category_id', '$product_code', '$description', '$price', '$stock')";

if ($conn->query($sql) === true) {
    header("Location: pos-shop.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>