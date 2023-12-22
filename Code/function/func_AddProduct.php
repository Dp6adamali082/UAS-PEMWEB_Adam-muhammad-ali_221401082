<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama_produk = $_POST['nama_produk'];
    $kode_produk = $_POST['kode_produk'];
    $nama_game = $_POST['nama_game'];
    $tipe_item = $_POST['tipe_item'];
    $deskripsi_produk = $_POST['deskripsi_produk'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $image = $_POST['image'];

    // Check the value of $stok to determine the status
    $status = ($stok < 1) ? 'Tidak Tersedia' : 'Tersedia';

    $sql = "INSERT INTO produk (nama_produk, kode_produk, nama_game, tipe_item, deskripsi_produk, stok, harga, image, status)
            VALUES ('$nama_produk', '$kode_produk', '$nama_game', '$tipe_item', '$deskripsi_produk', '$stok', '$harga', '$image', '$status')";

    try {
        mysqli_query($conn, $sql);
        echo    "<script>
                    document.location.href = '../admin/productlist_admin.php';
                    alert('Produk Berhasil Ditambahkan :D');
                </script>
    ";

    } catch (mysqli_sql_exception) {
        echo    "<script>
                    alert('Produk Gagal Ditambahkan ( X )');
                    document.location.href = '../admin/productlist_admin.php';
                </script>
    ";

    }
}

?>