<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productId = $_POST['id_item'];
    $username = $_SESSION['username'];

    $sql = "INSERT INTO keranjang (username, id_item) VALUES ('$username', '$productId')";

    try {
        mysqli_query($conn, $sql);
        header('location:../product/product.php');
    } catch (mysqli_sql_exception) {
        echo    "<script>
                    alert('Produk gagal ditambahkan ke keranjang');
                </script>
";
    }
}

?>