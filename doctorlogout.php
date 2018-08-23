<?php

    session_start();
    $_SESSION['doctorID'] = null;
	session_destroy();
	header("location:doctorlogin.php?value=0");
?>
