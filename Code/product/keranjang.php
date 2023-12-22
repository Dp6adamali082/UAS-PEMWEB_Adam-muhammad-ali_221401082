<?php

session_start();

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../../Assets/icon.png" type="image/png">
    <link rel="stylesheet" href="../style/style_keranjang.css">
    <script src="../script/carrousel.js" defer></script>
</head>

<body>


    <div class="nav-sec">
        <nav class="wrapper">
            <div class="brand-wrapper">
                <img src="../../Assets/logoRS.png" alt="brand" class="brand">
            </div>
            <div class="right-side" id="rightSide">
                <i class="fa fa-remove" onclick="hideMenu()" style="font-size:23px; color:#213555;"></i>
                <ul class="navigation">
                    <li><a href="../home/indexAfterLog.php">Home</a></li>
                    <li><a href="#howtobuy">Bantuan</a></li>
                    <li><a href="product.php">Produk</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <button class="cart-butt"><a href="../product/keranjang.php"><i class="bi bi-cart4" style="font-size: 29px;" color=""></i></a></button>
                    <button class="nav-login-butt"><a href="../function/func_logout.php">Logout</a></button>
                </ul>
            </div>
            <i class="fa fa-reorder" onclick="showMenu()" style="font-size:24px"></i>
        </nav>
    </div>

    <!-- CONTENT PART -->

    <div class="content-section">
        <div class="section-title">
            <h2>Keranjang Belanja</h2>
            <div class="content-wrapper">

                <div class="cart-section">
                    <div class="left-side">
                        <div class="check-box">
                            <input type="checkbox">
                        </div>
                        <div class="cart-wrapper">
                            <div class="product">
                                <div class="product-image">
                                    <img src="../../Assets/suzume.jpg" alt="prodIMG">
                                </div>
                                <div class="product-info">
                                    <div class="product-name">
                                        <p>Pika Pika No Mi</p>
                                    </div>
                                    <div class="product-price">
                                        <p>Rp30.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="trash-icon"><ion-icon name="trash"></ion-icon></span>
                </div>

            </div>
            <div class="total-price">
                <p>Total (5 item): <strong>Rp150.000</strong></p>
                <button class="checkout-butt"><a href="#">Bayar</a></button>
            </div>
        </div>

        <!-- FOOTER PART -->



        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#213555" fill-opacity="1" d="M0,32L20,64C40,96,80,160,120,181.3C160,203,200,181,240,160C280,139,320,117,360,133.3C400,149,440,203,480,218.7C520,235,560,213,600,197.3C640,181,680,171,720,149.3C760,128,800,96,840,74.7C880,53,920,43,960,69.3C1000,96,1040,160,1080,186.7C1120,213,1160,203,1200,176C1240,149,1280,107,1320,80C1360,53,1400,43,1420,37.3L1440,32L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
            </path>
        </svg>

        <footer class="footer" id="kontak">
            <div class="ft-card ftcard-1" id="footer-card1">
                <div class="ft-card-cont">
                    <h2>Ingin Beli Produk Kami?</h2>
                    <p class="copy-rel1">Kunjungi toko <strong>Itemku</strong> kami, klik tombol dibawah!</p>
                    <a href="https://fb.itemku.com/8QwE"><button class="ft-butt"><i class="bi bi-shop"></i>Menuju
                            Itemku</button></a>
                    <p class="copy-rel2">Copyright<i class="bi bi-c-circle"></i> 2023 <strong>Relation Store</strong>. All
                        rights reserved.</p>
                </div>
            </div>
            <div class="ft-card" id="footer-card2">
                <div class="ft-cont-wrap">
                    <h2>Hubungi Kami</h2>
                    <ul class="ft-cont">
                        <li><a href="https://www.instagram.com/relation_store_/"><i class="bi bi-instagram"></i>
                                Instagram</a></li>
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

        <!-- Script -->

        <script src="https://kit.fontawesome.com/1f3458581e.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script>
            var rightSide = document.getElementById("rightSide")

            function showMenu() {
                rightSide.style.right = "-20px";
            }

            function hideMenu() {
                rightSide.style.right = "-330px";
            }
        </script>

</body>

</html>