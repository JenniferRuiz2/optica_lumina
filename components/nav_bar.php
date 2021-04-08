<?php
	if (isset($_SESSION['email'])) {
        include("../components/nav_bar_login.php");
    }else{
        include("../components/nav_bar_unlogin.php");
    }
?>
