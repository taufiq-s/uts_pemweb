<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/show.css">
    <title>Document</title>
    </head>
<body>
    <div class="content">
        <h1>Data produk</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar Produk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect,"SELECT * FROM products");
                $no = 1;

                while($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['price'];?></td>
                    <!-- <td><img src="<?=$row['image'];?>" width="100"></td> -->
                    <td><a href="unduh.php/..<?=$row['image'];?>" target="_blank">unduh</a></td>
                    <td>
                        <a href="edit.php?id=<?=$row['id'];?>">edit</a>
                        <a href="delete.php?id=<?=$row['id'];?>">hapus</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="create.php" class="add-btn">Tambah Produk</a>
</body>
</html>