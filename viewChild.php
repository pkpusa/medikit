<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

require "usrsessioncontrol.php";
?>
<?php
	include "testing.php";
?>


<?php  
/*session_start();
if(isset($_SESSION['doct_name'])){
	$doctor = $_SESSION['doctorID'];
}
	else{
		header("location:doctorlogin.php?value=0");
		
	}*/
?>
<?php 
		//$userid=$_GET['id'];
		echo $user;
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE HTML>
<html>

<head>
	<title>Medikit-Doctor Booking</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="OP Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link rel="stylesheet" href="cssChild/jquery-ui.css" />
	<link href="cssChild/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">
	<!--//fonts-->
	<script>
	function myFunction() {
    window.print();
}
</script>
<style>

/* Style design for viewing no of patents*/
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr{background-color: #ddd;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
    <body>
    
	<!--background-->
    <h1><a href ="localhost/web/index.html"> </a></h1>
	<div class="register-form-w3layouts">
	<?php 
        require "dbconnection.php";
		$tblname = "tblchild";
		$sql = "SELECT * FROM $tblname WHERE userid = $user";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$fname = $row['f_name'];
			$lname = $row['l_name'];

			$dispname = $fname ." ".$lname;
		}
		}
		else{
			$dispname ="No Details Filled by User";
		}

	?>
        <h3 class="sub-heading-agileits"><?php echo $dispname; ?> </h3>
		<!-- Form starts here -->
		<div class="agileits_reservation">
					<form action="booking_chk.php" method="post">
					<table><tr><th>		 </th><th>		 </th></tr>
                    <?php 
                    //require "dbconnection.php";
                    $tblname = "tblchild";

					$sql = "SELECT * FROM $tblname WHERE userid = $user";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {

					while($row = $result->fetch_assoc()) {
						$childID = $row['userid'];
						$fname = $row['f_name'];
						$lname = $row['l_name'];
						$email =$row['email'];
						$dob = $row['dob'];
						$gender =$row['gender'];
						$height = $row['height'];
						$weight = $row['weight'];
						$bloodgrp = $row['bloodgrp'];
						$allergy =$row['allergy'];
						$medication = $row['medication'];
					?>

					<tr> <td>Name :</td><td>  <?php echo $fname ." ".$lname; ?> </td></tr>
					<tr> <td>Email ID :</td><td>  <?php echo $email; ?> </td></tr>
					<tr> <td>Date of Birth :</td><td>  <?php echo $dob;  ?> </td></tr>
					<tr> <td>Gender :</td><td>  <?php echo $gender; ?> </td></tr>
					<tr> <td>Height :</td><td>  <?php echo $height." Inch"; ?> </td></tr>
					<tr> <td>Weight :</td><td>  <?php echo $weight. " Kg"; ?> </td></tr>
					<tr> <td>Blood Group :</td><td>  <?php echo $bloodgrp; ?> </td></tr>
					<tr> <td>Allergy :</td><td>  <?php echo $allergy; ?> </td></tr>
					<tr> <td>Medication :</td><td>  <?php echo $medication; ?> </td></tr>
				<?php } ?>
			<?php }else {?>
			</span>
			<?php } ?>
				</table>
                    <a href="index.php?value=0"> <input type="button" value="Go Back"></a>
			         <input type="button" value="Print" onclick="myFunction()">
                            
					</form>
				</div>
        
		<!--// Form starts here -->
	</div>
	<!--copyright-->
	<div class="copyright">
		<p>&copy; 2018 MediKit  . All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">MediKit Team</a>
		</p>
	</div>
    
    
    <!-- displaying booked date and time -->
    
	<!--//copyright-->
	<script type="text/javascript" src="jsChild/jquery-2.2.3.min.js"></script>
	<!-- Calendar Js -->
	<script src="jsChild/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->
    
    

</body>

</html>
<?php
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}

?>	