<?php  
session_start();
if(isset($_SESSION['name'])){
	$user = $_SESSION['userid'];
}
	else{
		header("location:userlogin.php");
		
	}
?>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=" "; // Mysql password
$db_name="medikit"; // Database name

$conn=mysqli_connect("$host", "$username")or die("cannot connect");

mysqli_select_db($conn,$db_name)or die("cannot select DB");

$tbl_name="booking";
$doctorid = $_POST['doctor'];
$name=$_POST['name'];
$phone=$_POST['phone'];
//$pass=$_POST['psd'];
$mail=$_POST['email'];
//$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['timeslot'];

$sql2="select * from $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;
while($row=mysqli_fetch_array($result2)){
	if($row['date']==$date ){
        if($row['timeslot']==$time ){
        
		echo ""."matched";
		$flag=1;
		break;
	}
}

}

if($flag==1){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='doctorBooking.php?value=1';
    </SCRIPT>");
	die("");
	//echo "oh yes";
	}

else{
	$sql="INSERT INTO $tbl_name(doctorID,userid,name,phone,email,date,timeslot)
	VALUES ('$doctorid','$user','$name','$phone','$mail','$date','$time')";
	$result=mysqli_query($conn,$sql);
    
    //echo "f_name ".$fname."... ".$lname."... ".$mail.".... ".$phone.",,, ".$dob.",,,,".$gender."..... ".$height.".... ".$weight."....".$bloodgrp.",,,,".$allergy."....".$addr."....".$pfname."....".$plname.".....".$mob.".....".$medi;
    


	//$_SESSION['name']=$fname;
	//header("location:index.php");
	
}


?>


<?php
session_start();

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
	<title>Doctor Booking</title>
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
</head>

<body>
    <?php
			if(isset($_SESSION['error']))
			{
			 if(isset($_SESSION['name']))
			 {
				//echo "nikul";
			 }
			 else if($_SESSION['error']==15)
			 {
				//echo "hilgr";
		?>
				<div class="alert alert-error"><font size="5"> Please Login First..</font> 
				</div>
		<?php	 }
			}
			//else{ echo "hi";}
		?>
	<!--background-->
    <h1><a href ="localhost/web/index.html"> </a> Your Appointment is booked </h1>
	<div class="register-form-w3layouts">
        <h3 class="sub-heading-agileits">Here are the Details :</h3>
		<!-- Form starts here -->
		<div style ="font-size:25px; color:white; ">
            <div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<p>Name :</p>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<p><?php echo $name ?></p>
				</div>
			</div>
            
            <div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<p>Phone :</p>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<p><?php echo $phone ?></p>
				</div>
			</div>
        
                    <div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<p>Email :</p>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<p><?php echo $mail ?></p>
				</div>
			</div>
                    <div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<p>Date :</p>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<p><?php echo $date ?></p>
				</div>
			</div>
        
         <div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<p>Time :</p>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<p><?php echo $time ?></p>
				</div>
			</div>
        </div>
        <a href="doctorBooking.php?value=0"><input type ="button" value="New Booking" style ="background-color: #4CAF50; color: white; width:30%; height:50px;"></a>
        <a href="index.php"><input type="button" value="Home" style="background-color: #008CBA; color: white; width:30%; height:50px;"></a>
                            
					
				
        
		<!--// Form starts here -->
	
	<!--copyright-->
	<div class="copyright">
		<p>&copy; 2018 MediKit  . All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="_blank">MediKit Team</a>
		</p>
	</div>
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
    </div>
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

