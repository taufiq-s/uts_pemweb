<?php
require './../config/db.php';

if(isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time() . '-' . md5(rand()) . '-' . $image;

$uploadDirectory = __DIR__ . '/../image/';

// Check if the upload directory exists, create it if not
if (!is_dir($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}

$uploadPath = $uploadDirectory . $randomFilename;

$upload = move_uploaded_file($tempImage, $uploadPath);

// The rest of your code remains unchanged

    if($upload) {
        mysqli_query($db_connect,"INSERT INTO products (name,price,image)
                    VALUES ('$name','$price','/image/$randomFilename')");
        echo "berhasil upload";
    } else {
        echo "gagal upload";
    }

}