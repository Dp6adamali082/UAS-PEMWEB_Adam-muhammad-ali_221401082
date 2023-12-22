<?php

    session_start();
    session_unset();
    session_destroy();

    header("location: ../LoginReg/login.php");
    exit();

?>