<?php
include("../function/database.php");
include("../function/func_TakeData.php");
include("../function/func_DeleteUser.php");

$users = query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminPage_RS</title>
    <link rel="stylesheet" href="../style/style_userlist_Admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../../Assets/icon.png" type="image/png">
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
            <div class="rs-content-wrap">
                <div class="section-title">
                    <h2>User List Section</h2>
                    <p>Menampilkan list data seluruh user website yang sudah melakukan registrasi</p>
                </div>
                <table class="content-table">
                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>

                        </tr>

                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($users as $userdata) : ?>
                            <tr>

                                <td><?= $i ?></td>
                                <td><?= $userdata["username"] ?></td>
                                <td><?= $userdata["email"] ?></td>
                                <td><?= $userdata["password"] ?></td>
                                <td><button class="edit-button" onclick="return confirm('Apakah anda yakin ingin menghapus data user ini?');"><a href="../function/func_DeleteUser.php?id_user=<?= $userdata["id_user"]; ?>" class="edit-button-a">Hapus</a></button></td>

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