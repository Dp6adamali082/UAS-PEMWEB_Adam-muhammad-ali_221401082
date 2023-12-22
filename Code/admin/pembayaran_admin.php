<?php

include("../function/database.php");
include("../function/func_TakeData.php");

$pembayaran = query("SELECT * FROM pembayaran");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminPage_RS</title>
    <link rel="stylesheet" href="../style/style_product_Admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../../Assets/icon.png" type="image/png">
    <script src="../script/admin_modal.js" defer></script>
</head>

<body>

    <div class="container-ap">
        <!-- LEFT SIDE -->
        <div class="left-side">
            <div class="page-name">
                <img src="../../Assets/logoRSwhite.png" class="brand-img">
                <h1>ADMIN</h1>
            </div>
            <div class="ls-content-wrap">
                <ul class="ls-content-dash">
                    <li><span class="left-icon"><ion-icon name="speedometer"></ion-icon></span><a href="dashboard_admin.php">Dashboard</a></li>
                </ul>
                <h2>GENERAL</h2>
                <ul class="ls-content">
                    <li class="ls-content-li"><span class="left-icon"><ion-icon name="receipt"></ion-icon></span><a href="orderlist_admin.php">Order List</a></li>
                    <li class="ls-content-li"><span class="left-icon"><ion-icon name="pricetags"></ion-icon></span><a href="productlist_admin.php">Product List</a></li>
                    <li class="ls-content-li"><span class="left-icon"><ion-icon name="people"></ion-icon></span><a href="userlist_admin.php">User Data</a></li>
                    <li class="ls-content-li"><span class="left-icon"><ion-icon name="card"></ion-icon></span><a href="pembayaran_admin.php">Payment Status</a></li>
                </ul>
            </div>
        </div>

        <!-- LEFT SIDE END -->
        <!-- RIGHT SIDE -->

        <div class="right-side">
            <div class="upper-bar">
                <div class="search-icon">
                    <span><i class="fa fa-search" style="font-size:30px"></i></span>
                </div>
                <div class="admin-profile">
                    <h3>Admin Profile</h3>
                    <span class="admin-icon"><i class="fa fa-user-circle" style="font-size:36px"></i></span>
                </div>
            </div>

            <!-- TABEL PRODUK SECTION -->

            <div class="rs-content-wrap">
                <div class="section-title">
                    <div class="page-title">
                        <h2>Payment List Section</h2>
                        <p>Menampilkan status pembayaran</p>
                    </div>
                </div>
                <table class="content-table">
                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Username</th>
                            <th>Nama Game</th>
                            <th>Tipe Item</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($pembayaran as $pembayarandata) : ?>
                            <tr>

                                <td>
                                    <?= $i ?>
                                </td>
                                <td>
                                    <?= $produkdata["nama_produk"] ?>
                                </td>
                                <td>
                                    <?= $produkdata["nama_game"] ?>
                                </td>
                                <td>
                                    <?= $produkdata["tipe_item"] ?>
                                </td>
                                <td>
                                    <?= $produkdata["stok"] ?>
                                </td>
                                <td>Rp
                                    <?= $produkdata["harga"] ?>
                                </td>
                                <td>
                                    <img src="../../Assets/<?= $produkdata["image"] ?>" alt="IconProduk" class="product-img">
                                </td>
                                <td>
                                    <?= $produkdata["status"] ?>
                                </td>
                                <td>
                                    <!-- FiTUR eDIT bLOM dONE yGY NtaRAn La -->

                                    <button class="edit-button" onclick="return confirm('Apakah anda yakin ingin menghapus data produk ini?');"><a href="../function/func_DeleteProduct.php?id_item=<?= $produkdata["id_item"]; ?>" class="edit-button-a"><ion-icon name="trash-outline" size="small"></ion-icon></a></button>
                                    <button class="edit-button" onclick="return confirm('Apakah anda yakin ingin menghapus data produk ini?');"><a href="../function/func_DeleteProduct.php?id_item=<?= $produkdata["id_item"]; ?>" class="edit-button-a"><ion-icon name="build-outline" size="small"></ion-icon></a></button>
                                </td>

                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>