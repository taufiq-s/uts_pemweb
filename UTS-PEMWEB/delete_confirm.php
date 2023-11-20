<!-- delete_confirm.php -->
<?php
    require './config/db.php';

    if(isset($_POST['id'])) {
        $id = $_POST['id'];

        // Perform delete operation
        $delete_query = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");

        if($delete_query) {
            echo "Produk berhasil dihapus.";
        } else {
            echo "Gagal menghapus produk.";
        }
    }

    // Redirect back to the product list
    header("Location: show.php");
    exit();
?>
