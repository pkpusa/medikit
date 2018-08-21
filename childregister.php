<?php
  
session_start();
if(isset($_SESSION['name'])){
	$user = $_SESSION['userid'];
}
	else{
		header("location:userlogin.php");
		
	}



$host="localhost"; // Host name
$username="root"; // Mysql username
$password=" "; // Mysql password
$db_name="medikit"; // Database name

$conn=mysqli_connect("$host", "$username")or die("cannot connect");

mysqli_select_db($conn,$db_name)or die("cannot select DB");

$tbl_name="tblchild";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
//$pass=$_POST['psd'];
$mail=$_POST['email'];
//$phone=$_POST['phone'];

$dob=$_POST['dob'];

$gender=$_POST['gender'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$bloodgrp=$_POST['bloodgrp'];
$allergy=$_POST['allergy'];
$addr=$_POST['addr'];
$pfname=$_POST['pfname'];
$plname=$_POST['plname'];
$relation=$_POST['relationship'];
$mob=$_POST['mob'];
$medi=$_POST['medication'];

if($medi == '')
{
    $medi = 'Not Mentioned';
}

$sql2="select * from $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;
while($row=mysqli_fetch_array($result2)){
	if($row['email']==$mail){
		echo ""."matched";
		$flag=1;
		break;
	}
}

if($flag==1){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='index.php?value=1';
    </SCRIPT>");
	die("");
	//echo "oh yes";
	}

else{
	$sql="INSERT INTO $tbl_name(userid,f_name,l_name,email,dob,gender,height,weight,bloodgrp,allergy,addr,pfname,plname,relation,mobile,medication)
	VALUES ('$user','$fname','$lname','$mail','$dob','$gender','$height','$weight','$bloodgrp','$allergy','$addr','$pfname','$plname','$relation','$mob','$medi')";
	$result=mysqli_query($conn,$sql);
    
    //echo "f_name ".$fname."... ".$lname."... ".$mail.".... ".$phone.",,, ".$dob.",,,,".$gender."..... ".$height.".... ".$weight."....".$bloodgrp.",,,,".$allergy."....".$addr."....".$pfname."....".$plname.".....".$mob.".....".$medi;
    


	///$_SESSION['name']=$fname;
	//header("location:index.php");
	
}


?>


<html>

<head>
	<title>Child Details Registration</title>
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
	<!--background-->
    <h1><a href ="index.php"></a> Your Details has been Submitted </h1>
    
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
        
		<form action="viewChild.php" method="post">
			<!--
        <h3 class="sub-heading-agileits">Child Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="fname" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="lname" placeholder="Last Name" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="email" name="email" placeholder="Email" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="phone" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input id="datepicker" name="dob" type="text" placeholder="DOB" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
					    required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<select class="form-control" name="gender">
						<option >Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="height" placeholder="Height (Inches)" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="weight" placeholder="Weight (Kg)" required="">
				</div>
			</div>
            <div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="bloodgrp" placeholder="Blood Group" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="allergy" placeholder="Allergy" required="">
				</div>
			</div>
			 <!--<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control">
                        
                       
						<option>Marital Status</option>
						<option value="Single">Single</option>
						<option value="Married">Married</option>
						<option value="Divorced">Divorced</option>
					</select>
				</div>
			</div>!-->
        
        <!--
			<div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="addr" placeholder="Address..."></textarea>
			</div>
			<div class="clear"></div>
			<h2 class="sub-heading-agileits">Parents/ Guardian Details</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="pfname" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="plname" placeholder="Last Name" required="">
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="relationship" placeholder="Relationship" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="mob" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="radio-section">
				<h6>Taking any medications currently</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="a-option" name="selector1">
						<label for="a-option">Yes</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="selector1">
						<label for="b-option">No</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="medication" placeholder="If you are taking please list them here.."></textarea>
			</div> -->
                     
         
         <input type="text" name="username" placeholder="Enter Email To View Details">
    
        
       
			<input type="submit" value="Submit">
			<input type="reset" value="Clear Form">
			<div class="clear"></div>
		</form>
		
	</div>
    -->
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

</body>

</html>



