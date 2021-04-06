<?php
    session_start();
    session_destroy();
    header("location: ../pages/principal_ecommerce.php");
    exit();
?>