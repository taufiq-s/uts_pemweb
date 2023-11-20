<?php
    require './config/db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        // You can add more fields as needed for your product update

        $update_query = mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price' WHERE id=$id");

        if ($update_query) {
            echo "Perubahan berhasil disimpan.";
        } else {
            echo "Gagal menyimpan perubahan.";
        }
    } else {
        echo "Metode HTTP tidak valid.";
    }

    // Redirect back to the product list
    header("Location: show.php");
    exit();
?>
