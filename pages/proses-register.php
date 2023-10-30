<?php
 session_start();
// Koneksi ke database
include 'koneksi-posshop.php';

// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

// Username dari no hp
$username = $phone_number;

// Hash password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Set group_id ke 3 (admin products)
$group_id = 3;

// Query
$sql = "INSERT INTO users (name, email, username, phone_number, password, group_id) VALUES ('$name', '$email', '$username', '$phone_number', '$hashed_password', $group_id)";

if ($connection->query($sql) === TRUE) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

// Tutup koneksi database
$connection->close();
?>