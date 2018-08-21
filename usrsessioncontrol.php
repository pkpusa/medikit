<?php  
session_start();
if(isset($_SESSION['name'])){
	$user = $_SESSION['userid'];
}
	else{
		header("location:userlogin.php?value=0");
		
	}
?>