<?php

    session_start();
    $_SESSION['admin_id'] = null;
	session_destroy();
	header("location:adminlogin.php?value=0");
?>
