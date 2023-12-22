<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password, email, role) VALUES ('$username', '$hash', '$email', 'visitor')";
        
        try {
            mysqli_query($conn, $sql);
            echo    "<script>
                        document.location.href = '../LoginReg/login.php';
                        alert('Registrasi Anda Berhasil!');
                    </script>
        ";   

        } catch (mysqli_sql_exception) {
            echo    "<script>
                        alert('Registrasi Anda Gagal!, Password/Username Was Taken');
                        document.location.href = '../LoginReg/register.php';
                    </script>
        ";   
            
        }
    }

?>