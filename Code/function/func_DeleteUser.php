<?php

    include("../function/database.php");
    global $conn;
    if (isset($_GET["id_user"])) {
        $id = $_GET["id_user"];

        $sql = "DELETE FROM users WHERE id_user = $id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>
                    alert('Data berhasil dihapus');
                    document.location.href = '../admin/userAdmin.php';
                </script>
            ";
    } else {
        echo "<script>
                    alert('Data tidak berhasil dihapus');
                    document.location.href = '../admin/userAdmin.php';
                </script>
            ";
    }

    }

?>