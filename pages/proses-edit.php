<?php
// Koneksi ke database
include 'koneksi-posshop.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $product_id = $_POST['product_id'];
    $product_code = $_POST['product_code'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    // Periksa koneksi ke database
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    // Query untuk mengupdate data di database berdasarkan Id
    $sql = "UPDATE products SET product_name='$product_name', category_id='$category_id', product_code='$product_code', description='$description', price='$price', stock='$stock' WHERE id=$product_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: pos-shop.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
} else {
    echo "Metode pengiriman data tidak valid.";
}
?>