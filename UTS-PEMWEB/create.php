<!-- create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="./style/create.css">
</head>
<body>
    
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <h1>Tambah Produk</h1>
        <input type="text" name="name" placeholder="input nama produk">
        <input type="number" name="price" placeholder="input harga produk">
        <input type="file" name="image">
        <input type="submit" value="simpan" name="submit">
        <a href="show.php">Lihat data produk</a>
    </form>
</body>
</html>
