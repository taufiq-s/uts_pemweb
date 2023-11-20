<!-- delete.php -->
<?php
    require './config/db.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Retrieve product information for confirmation message
        $product = mysqli_query($db_connect, "SELECT * FROM products WHERE id=$id");
        $row = mysqli_fetch_assoc($product);

        if (!$row) {
            echo "Produk tidak ditemukan.";
            exit();
        }
    } else {
        echo "ID produk tidak diberikan.";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Produk</title>
    <link rel="stylesheet" href="./style/delete.css"> <!-- Gunakan edit.css agar tampilannya lebih mirip dengan edit.php -->
</head>
<body>
    <div class="content">
        <form action="delete_confirm.php" method="POST" class="edit-form">
            <h1>Hapus Produk</h1>

            <div class="form-group">
                <label for="productName">Nama Produk:</label>
                <input type="text" id="productName" name="name" value="<?=$row['name'];?>" readonly>
            </div>

            <div class="form-group">
                <label for="productPrice">Harga:</label>
                <input type="text" id="productPrice" name="price" value="<?=$row['price'];?>" readonly>
            </div>

            <input type="hidden" name="id" value="<?=$row['id'];?>">

            <div class="button-container">
                <button type="submit" class="edit-button">Ya, Hapus</button>
            </div>
        </form>
    </div>
</body>
</html>
