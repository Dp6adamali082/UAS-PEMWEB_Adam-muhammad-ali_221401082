<?php

    if (isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn," SELECT * FROM users WHERE username = '$username' ");
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {

                $_SESSION["username"] = $row["username"];
                $_SESSION["login"] = true;
                echo    "<script>
                            document.location.href = '../product/product.php';
                            alert('Anda Berhasil Login!');
                        </script>
                ";
                exit;
            }
        } else {
            echo    "<script>
                        alert('Maaf, Username Atau Password Salah');
                    </script>
            ";
        }
    }
?>