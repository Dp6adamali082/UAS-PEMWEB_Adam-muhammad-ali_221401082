<?php

    include("../function/database.php");
    global $conn;
    if (isset($_GET["id_item"])) {
        $id_item = $_GET["id_item"];

        $sql = "DELETE FROM produk WHERE id_item = $id_item";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>
                    alert('Data berhasil dihapus');
                    document.location.href = '../admin/productlist_admin.php';
                </script>
            ";
    } else {
        echo "<script>
                    alert('Data tidak berhasil dihapus');
                    document.location.href = '../admin/productlist_admin.php';
                </script>
            ";
    }

    }

?>