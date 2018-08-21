<?php

	session_start();
	$_SESSION['userid']= null;
	session_destroy();
	header("location:index.php");
?>
