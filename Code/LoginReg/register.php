<?php
    include("../function/database.php");
    include("../function/func_register.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Page Relation Store</title>
        <link rel="stylesheet" href="../style/style_login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <link rel="icon" href="../../Assets/icon.png" type="image/png">

        <style>
            body {
                position: cover;
                width: 100%;
                height: 100vh;
                background-image: linear-gradient(rgba(4, 9, 30, 0.2), rgba(4, 9, 30, 0.8)), url('../../Assets/beg.png');
                background-size: cover;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        
        <!-- NAV SECTION -->

        <header class="container" id="home-top"> 
            <nav class="wrapper">
                <div class="brand-wrapper">
                    <a href="../../index.php"><img src="../../Assets/logoRS.png" alt="brand" class="brand"></a>
                </div>
                <div class="right-side" id="rightSide">
                    <i class="fa fa-remove" onclick="hideMenu()" style="font-size:23px; color:#213555;"></i>
                    <ul class="navigation">       
                        <li><a href="login.php">Login</a></li>
                        <button class="nav-login-butt"><a href="../../index.php">Home</a></button>
                    </ul>
                </div>
                <i class="fa fa-reorder" onclick="showMenu()" style="font-size:24px"></i>
            </nav>
        </header>


        <!-- LOGIN SECTION -->

    <div class="login-container">
        <div class="reg-login-section">
            <div class="form-box login">
                <h2>Daftar</h2>
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                    <div class="input-box">
                        <span class="form-icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input type="username" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="form-icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="form-icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <button type="submit" name="submit" class="submit-button">Daftar</button>
                    <div class="login-register">
                        <p>Sudah mempunyai akun? <a href="login.php" class="register-link">Masuk</a></p>
                    </div>
                    <div class="copyright-log">
                        <p><i class="bi bi-c-circle"></i>2023 <strong>Relation Store, All right reserved.</strong>.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-- --Java Script-- -->

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
