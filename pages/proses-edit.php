<?php
include 'koneksi-posshop.php';

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $product_code = $_POST['product_code'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    // Inisialisasi array untuk menyimpan nama file gambar baru
    $new_images = [];

    // Loop dari gambar yang diunggah
    if (!empty($_FILES['image']['name'][0])) {
        $total_images = count($_FILES['image']['name']);
        for ($i = 0; $i < $total_images; $i++) {
            $new_image_name = $_FILES['image']['name'][$i];
            $file_tmp = $_FILES['image']['tmp_name'][$i];
            $target_path = "../dist/upload/" . $new_image_name;
            
            if (move_uploaded_file($file_tmp, $target_path)) {
                $new_images[] = $new_image_name;
            }
        }
    }

    // Mengganti gambar produk jika ada yang diunggah
    if (!empty($new_images)) {
        // Konversi array gambar baru ke JSON
        $new_images_json = json_encode($new_images);

        $sql = "UPDATE products SET product_name='$product_name', category_id='$category_id', product_code='$product_code', description='$description', price='$price', stock='$stock', image='$new_images_json' WHERE id='$product_id'";
    } else {
        $sql = "UPDATE products SET product_name='$product_name', category_id='$category_id', product_code='$product_code', description='$description', price='$price', stock='$stock' WHERE id='$product_id'";
    }

    if ($conn->query($sql) === true) {
        header("Location: pos-shop.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>