<?php
    // Koneksi ke database
    include 'koneksi-posshop.php';

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $product_code = $_POST['product_code'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    // Simpan gambar pertama ke direktori
    move_uploaded_file($file_tmp[0], "../dist/upload/" . $image[0]);

    // Buat array untuk menyimpan nama gambar yang akan disimpan dalam file JSON
    $imageArray = array($image[0]);

    // Loop untuk menyimpan gambar tambahan ke direktori dan array
    for ($i = 1; $i < count($image); $i++) {
        move_uploaded_file($file_tmp[$i], "../dist/upload/" . $image[$i]);
        $imageArray[] = $image[$i];
    }

    // Konversi array gambar menjadi JSON
    $imagesJson = json_encode($imageArray);

    // SQL untuk menyimpan data, termasuk JSON gambar
    $sql = "INSERT INTO products (product_name, category_id, product_code, description, price, stock, image) VALUES ('$product_name', '$category_id', '$product_code', '$description', '$price', '$stock', '$imagesJson')";

    if ($conn->query($sql) === true) {
        header("Location: pos-shop.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
?>