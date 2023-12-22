<?php

    include("../function/database.php");
    global $conn;
    if (isset($_GET["id_keranjang"])) {
        $id_keranjang = $_GET["id_keranjang"];

        $sql = "DELETE FROM keranjang WHERE id_keranjang = $id_keranjang";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header('location:../product/product.php');
    } else {
        echo "<script>
                    alert('Produk gagal dihapus dari keranjang!');
                    document.location.href = '../product/product.php';
                </script>
            ";
    }

    }

?>