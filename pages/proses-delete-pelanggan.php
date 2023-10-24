<?php
// Koneksi ke database
include 'koneksi-posshop.php';
if (isset($_GET['id'])) {
    $customers_id = $_GET['id'];

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk menghapus produk berdasarkan 'id'
    $sql = "DELETE FROM customers WHERE id = $customers_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: pelanggan.php");
    exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
} else {
    echo "ID Produk tidak ditemukan.";
}
?>