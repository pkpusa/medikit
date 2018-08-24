<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
	require "usrsessioncontrol.php";
	include "testing.php";
?>

<?php
	$val=$_GET['value'];
	if($val==1){
	?>
<h3><a>User already exists</a></h3>
	<?php
	}
	

?>


<!DOCTYPE HTML>
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
    <h1><a href ="localhost/web/index.html">MediKit</a> Child Details Filling : </h1>
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="childregister.php" method="post">
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
                    <select class="form-control" name="bloodgrp">
                        
                       
						<option>Blood Group</option>
						<option value="A+">A+</option>
						<option value="B+">B+</option>
						<option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="A-">A-</option>
					</select>
					<!-- <input type="text" name="bloodgrp" placeholder="Blood Group" required=""> -->
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
                        <select class="form-control" name="relationship">
						<option>Relationship</option>
						<option value="Father">Father</option>
						<option value="Mother">Mother</option>
						<option value="Brother">Brother</option>
                        <option value="Grandfather">Grandfather</option>
                        <option value="Grandmother">Grandmother</option>
                        <option value="Uncle">Uncle</option>
                        <option value="Other">Other</option>
					</select>
					<!--<input type="text" name="relationship" placeholder="Relationship" required="">   -->
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="mob" placeholder="Phone Number" required="" pattern="[789][0-9]{9}">
				</div>
			</div>
            			<div class="main-flex-w3ls-sectns">
				
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<!--<input type="text" name="phone" placeholder="Phone Number" required="" pattern="[789][0-9]{9}"> -->
				</div>
			</div>
            <div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="email" name="email" placeholder="Email" required="">
                    <?php
	$val=$_GET['value'];
	if($val==1){
	?>
<h3><a style = "font-size :15px; color : red;">User already exists</a></h3>
	<?php
	}
	

?>
				</div>
            <div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="addr" placeholder="Address..."></textarea>
			</div>

			<input type="submit" value="Submit">
			<input type="reset" value="Clear Form">
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>
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