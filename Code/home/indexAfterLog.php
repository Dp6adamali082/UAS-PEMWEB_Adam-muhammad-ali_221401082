<?php
session_start();
$username = $_SESSION['username'];

if (!isset($_SESSION["login"])) {
    header("location: ../LoginReg/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relation Store</title>
    <link rel="stylesheet" href="../style/style_indexAfterLog.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../../Assets/icon.png" type="image/png">

    <style>
        .header-container {
            display: flex;
            position: sticky;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background-image: linear-gradient(rgba(4, 9, 30, 0.4), rgba(4, 9, 30, 0.3)), url('../../Assets/beg.png');
            background-size: cover;
            background-position: center;
            padding: 0.5rem 1rem;
        }

        .promo-card {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-image: url('../../Assets/vectorBG.jpg');
            background-size: cover;
            border-radius: 20px;
            box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.37);
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -ms-border-radius: 20px;
            -o-border-radius: 20px;
        }
    </style>

</head>

<body class="body-home">

    <header class="header-container" id="home-top">
        <nav class="wrapper">
            <div class="brand-wrapper">
                <img src="../../Assets/logoRS.png" alt="brand" class="brand">
            </div>
            <div class="right-side" id="rightSide">
                <i class="fa fa-remove" onclick="hideMenu()" style="font-size:23px; color:#213555;"></i>
                <ul class="navigation">
                    <li><a href="indexAfterLog.php">Home</a></li>
                    <li><a href="#howtobuy">Bantuan</a></li>
                    <li><a href="../product/product.php">Produk</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <button class="cart-butt"><a href="../product/product.php"><i class="bi bi-cart4" style="font-size: 29px;" color=""></i></a></button>
                    <button class="nav-login-butt"><a href="../function/func_logout.php">Logout</a></button>
                </ul>
            </div>
            <i class="fa fa-reorder" onclick="showMenu()" style="font-size:24px"></i>
        </nav>
        <div class="welcome-text-wrapper">
            <div class="welcome-text">
                <h1>Belanja Lebih Mudah, Gaming Lebih Asik☝️😎</h1>
                <a href="../product/product.php"><button class="hero-butt">Beli Produk Kami</button></a>
            </div>
        </div>
    </header>

    <section class="title-option-card" id="produk-card">
        <h1>Pilih Game Kesukaanmu!</h1>
        <p>Banyak game kita coy, amang ajah</p>
    </section>

    <!-- PRODUK CARD SECTION -->

    <div class="card-container">
        <div class="card">
            <div class="img-wrap">
                <a href="../product/product.php"><img src="../../Assets/ml.jpg" class="card-pict"><i class="fa fa-sign-in" style="font-size:50px; color: #5adeff;"></i></a>
            </div>
            <div class="card-content">
                <h2>Mobile Legend</h2>
                <p>Tersedia diamond mobile legend,<br>dan lainnya.</p>
            </div>
        </div>
        <div class="card">
            <div class="img-wrap">
                <a href="../product/product.php"><img src="../../Assets/roblox.jpeg" class="card-pict"><i class="fa fa-sign-in" style="font-size:50px; color: #5adeff;"></i></a>
            </div>
            <div class="card-content">
                <h2>Roblox</h2>
                <p>Tersedia item game Roblox,<br>robux, akun roblox, dan lainnya</p>
            </div>
        </div>
        <div class="card">
            <div class="img-wrap">
                <a href="../product/product.php"><img src="../../Assets/valorant.jpg" class="card-pict"><i class="fa fa-sign-in" style="font-size:50px; color: #5adeff;"></i></a>
            </div>
            <div class="card-content">
                <h2>Valorant</h2>
                <p>Tersedia akun valorant, valorant point, dan lainnya.</p>
            </div>
        </div>
        <div class="card">
            <div class="img-wrap">
                <a href="../product/product.php"></a><img src="../../Assets/cs.jpg" class="card-pict"><i class="fa fa-sign-in" style="font-size:50px; color: #5adeff;"></i></a>
            </div>
            <div class="card-content">
                <h2>Counter Strike 2</h2>
                <p>Tersedia skin CS 2,<br>dan lainnya.</p>
            </div>
        </div>
    </div>

    <!-- PRODUK CARD SECTION END -->

    <!-- PROMO CARD SECTION -->

    <div class="pc-container">
        <div class="promo-card">
            <div class="tulisan-pc">
                <h2 class="judulcard">LAGI PROMO COK!</h2>
                <p class="isicard">Item Roblox, Akun Valo,<br> dan lainnya lagi murah wir</p>
                <a href="../product/product.php"><button class="tombol-pc">Gass!</button></a>
            </div>
            <img src="../../Assets/SUZUMEH.png" class="pc-poto">
        </div>
    </div>

    <!-- PROMO CARD SECTION END-->

    <!-- REVIEW CARD SECTION START-->

    <section class="review-card">
        <h1>Kata Customer Kami Nih</h1>
        <p>Udah pasti terpercaya dah, masa kami boonk yekan</p>

        <div class="rc-wrap">
            <div class="rc-container">
                <img src="../../Assets/ppcustomer.png" alt="#">
                <div>
                    <p>Ramah banget adminnya:D<br>rekomen
                        banget deh pokoknya guys</p>
                    <h3>Rafa Favian</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
            <div class="rc-container">
                <img src="../../Assets/avatar-blue.png" alt="#">
                <div>
                    <p>Mantap banget dah, pengirimannya cepet!!</p>
                    <h3>Zxycr</h3>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- REVIEW CARD SECTION END -->

    <!-- HOW TO BUY SECTION -->

    <section class="howtobuy-section" id="howtobuy">
        <div class="howtobuy-wrap">
            <div class="howtobuy-title">
                <h2>Cara Pembelian Produk Kami</h2>
                <p>Langkah - langkah pembelian di Relation Store</p>
            </div>
            <div class="howtobuy-container">
                <div class="howtobuy-card">
                    <div class="htb-class-img">
                        <i class="fa-solid fa-cart-shopping" style="font-size:70px; color: #5adeff;"></i>
                    </div>
                    <div class="htb-card-text">
                        <h2>Pilih Produk</h2>
                        <p>Pilih produk yang ingin kamu beli, lalu klik tombol beli</p>
                    </div>
                </div>
                <div class="howtobuy-card">
                    <div class="htb-class-img">
                        <i class="fa-solid fa-money-bill-wave" style="font-size:70px; color: #5adeff;"></i>
                    </div>
                    <div class="htb-card-text">
                        <h2>Lakukan Pembayaran</h2>
                        <p>Setelah konfirmasi pembelian berhasil kamu akan diminta untuk melakukan pembayaran dalam waktu yang ditentukan</p>
                    </div>
                </div>
                <div class="howtobuy-card">
                    <div class="htb-class-img">
                        <i class="fa-solid fa-headset" style="font-size:70px; color: #5adeff;"></i>
                    </div>
                    <div class="htb-card-text">
                        <h2>Hubungi Admin</h2>
                        <p>Setelah melakukan pembayaran harap hubungi admin melalui email ataupun kontak lainnya yang telah diberikan setelah kamu melakukan pembayaran</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW TO BUY SECTION END -->

    <!-- WHY CHOOOSE US SECTION -->

    <section class="whychooseus-section">
        <div class="whychooseus-title">
            <h2>Kenapa Harus di Relation Store?</h2>
            <p>Masa masi gatau sih, sini biar dikasi tau deh</p>
        </div>
        <div class="whychooseus-wrap">
            <div class="whychooseus-container">
                <div class="whychooseus-card">
                    <div class="wcu-card-title">
                        <h2>Cuman Buat Kamu Nih</h2>
                    </div>
                    <div class="whychooseus-content">
                        <div class="wcu-icon-wrap">
                            <i class="fa fa-tags wcu-icon" style="font-size:20px"></i>
                        </div>
                        <div class="wcu-card-text">
                            <h2>Promo dan Diskon</h2>
                            <p>Selalu ada penawaran menarik dan diskon yang dapat kamu nikmati.</p>
                        </div>
                    </div>
                    <div class="whychooseus-content">
                        <div class="wcu-icon-wrap">
                            <i class="fa fa-edit wcu-icon" style="font-size:20px"></i>
                        </div>
                        <div class="wcu-card-text">
                            <h2>Ulasan Pelanggan</h2>
                            <p>Baca ulasan pelanggan untuk memastikan kamu membuat keputusan yang tepat.</p>
                        </div>
                    </div>
                    <div class="whychooseus-content">
                        <div class="wcu-icon-wrap">
                            <i class="fa fa-truck wcu-icon" style="font-size:20px"></i>
                        </div>
                        <div class="wcu-card-text">
                            <h2>Pengiriman Cepat</h2>
                            <p>Kami menawarkan pengiriman cepat untuk memastikan produk tiba di tangan kamu dengan segera.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wcu-class-img">
                <img src="../../Assets/stonks.png" alt="stonks">
            </div>
        </div>
        </div>
    </section>

    <!-- FOOTER PART -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#213555" fill-opacity="1" d="M0,32L20,64C40,96,80,160,120,181.3C160,203,200,181,240,160C280,139,320,117,360,133.3C400,149,440,203,480,218.7C520,235,560,213,600,197.3C640,181,680,171,720,149.3C760,128,800,96,840,74.7C880,53,920,43,960,69.3C1000,96,1040,160,1080,186.7C1120,213,1160,203,1200,176C1240,149,1280,107,1320,80C1360,53,1400,43,1420,37.3L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path>
    </svg>

    <footer class="footer" id="kontak">
        <div class="ft-card ftcard-1" id="footer-card1">
            <div class="ft-card-cont">
                <h2>Ingin Beli Produk Kami?</h2>
                <p class="copy-rel1">Kunjungi toko <strong>Itemku</strong> kami, klik tombol dibawah!</p>
                <a href="https://fb.itemku.com/8QwE"><button class="ft-butt"><i class="bi bi-shop"></i>Menuju Itemku</button></a>
                <p class="copy-rel2">Copyright<i class="bi bi-c-circle"></i> 2023 <strong>Relation Store</strong>. All rights reserved.</p>
            </div>
        </div>
        <div class="ft-card" id="footer-card2">
            <div class="ft-cont-wrap">
                <h2>Hubungi Kami</h2>
                <ul class="ft-cont">
                    <li><a href="https://www.instagram.com/relation_store_/"><i class="bi bi-instagram"></i> Instagram</a></li>
                    <li><a href="https://wa.me/+6281370991944"><i class="bi bi-whatsapp"></i> Whatsapp</a></li>
                    <li><a href="mailto:a.fauzan090305@gmail.com"><i class="bi bi-envelope-at"></i> Gmail</a></li>
                    <p><i class="fa fa-phone"></i> 081370991944</p>
                    <p>Senin - Minggu</p>
                    <p>24 Jam Layanan</p>
                </ul>
            </div>
            <div class="ft-cont-wrap">
                <h2>Produk</h2>
                <ul class="ft-cont">
                    <li><a href="#produk-card">Mobile Legend</a></li>
                    <li><a href="#produk-card">Roblox</a></li>
                    <li><a href="#produk-card">Valorant</a></li>
                    <li><a href="#produk-card">Counter Strike 2</a></li>
                </ul>
            </div>
            <div class="ft-cont-wrap">
                <h2>Navigasi</h2>
                <ul class="ft-cont">
                    <li><a href="#home-top">Home</a></li>
                    <li><a href="#howtobuy">Bantuan</a></li>
                    <li><a href="#produk-card">Produk</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <div class="logo-ft-wrap">
                <img src="../../Assets/logoRS.png" class="logo-footer">
                <div class="logo-cont">
                    <p><i class="bi bi-c-circle"></i>2023 <strong>Relation Store</strong>.</p>
                    <p>All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- --Java Script-- -->

    <script src="https://kit.fontawesome.com/1f3458581e.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        var rightSide = document.getElementById("rightSide")

        function showMenu() {
            rightSide.style.right = "-20px";
            rightSide.style.display = "flex";
        }

        function hideMenu() {
            rightSide.style.right = "-330px";
            rightSide.style.display = "none";
        }
    </script>

    <script>
        // KERANJANG SCRIPT

        var keranjang = document.getElementById("keranjang")

        function showKeranjang() {
            keranjang.style.right = "0px";
        }

        function hideKeranjang() {
            keranjang.style.right = "-400px";
        }
    </script>

</body>

</html>