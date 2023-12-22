<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminPage_RS</title>
    <link rel="stylesheet" href="../style/style_dashboard_Admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../../Assets/icon.png" type="image/png">
</head>

<body>

    <div class="container-ap">
        <!-- LEFT SIDE -->
        <div class="left-side">
            <div class="page-name">
                <img src="../../Assets/logoRSwhite.png" alt="brand" class="brand-img">
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
                    <h2>Dasboard Website</h2>
                    <p>Menampilkan beberapa status website yang tersedia</p>
                </div>
                <div class="content-card">
                    <div class="rs-content-box">
                        <div class="box-text">
                            <h3>VISIT</h3>
                            <p>5254</p>
                        </div>
                        <div>
                            <div class="content-icon">
                                <span><i class="fa fa-eye" style="font-size:40px"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="rs-content-box">
                        <div class="box-text">
                            <h3>PESANAN MASUK</h3>
                            <p>43</p>
                        </div>
                        <div>
                            <div class="content-icon">
                                <span><i class="fa fa-eye" style="font-size:40px"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="rs-content-box">
                        <div class="box-text">
                            <h3>BARANG TERJUAL</h3>
                            <p>254</p>
                        </div>
                        <div>
                            <div class="content-icon">
                                <span><i class="fa fa-eye" style="font-size:40px"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="rs-content-box">
                        <div class="box-text">
                            <h3>LOREM</h3>
                            <p>254</p>
                        </div>
                        <div>
                            <div class="content-icon">
                                <span><i class="fa fa-eye" style="font-size:40px"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE END -->



    <!-- JAVASCRIPT -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>