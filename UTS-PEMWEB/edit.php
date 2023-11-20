<!-- edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/edit.css">
    <title>Edit Produk</title>
</head>
<body>
    <?php
        require './config/db.php';

        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            $product = mysqli_query($db_connect,"SELECT * FROM products WHERE id=$id");
            $row = mysqli_fetch_assoc($product);
        }
    ?>

    <form action="update.php" method="POST">
        <h2>Edit Produk</h2>
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        <label for="name">Nama Produk:</label>
        <input type="text" id="name" name="name" value="<?=$row['name'];?>" required><br>

        <label for="price">Harga:</label>
        <input type="text" id="price" name="price" value="<?=$row['price'];?>" required><br>

        <!-- You can add more fields as needed for your product editing form -->

        <button type="submit">Simpan Perubahan</button>
    </form>
    <a href="show.php">Kembali ke Daftar Produk</a>
</body>
</html>
