<?php
	require "usrsessioncontrol.php";
	include "testing.php";
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Medkit Feedback :: Prakash Thakur</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Feedback Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Josefin+Slab:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/feedback/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="content">
	<h1>Medkit Feedback</h1>
	<div class="main">
		<form>
			<h5>Your Name</h5>
				<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
			<h5>Email</h5>
				<input type="text" value="johnkeith@mail.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'johnkeith@mail.com';}" required="">
			<h5>Your Review <span>( Tips and Guidelines ) </span> </h5>	
				<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">Type here</textarea>
		</form>	
		<h5>Overall Experience</h5>
			<div class="radio-btns">
					<div class="swit">								
						<div class="check_box_one"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Very Good</label> </div></div>
                        <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Good</label> </div></div>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Fair</label> </div></div>
						<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Poor</label> </div></div>
						<div class="clear"></div>
					</div>
			</div>
		<h5>Timely Response</h5>
			<div class="radio-btns">
					<div class="swit">								
						<div class="check_box_one"> <div class="radio1"> <label><input type="radio" name="radio1" checked=""><i></i>Very Good</label> </div></div>
                        <div class="check_box"> <div class="radio1"> <label><input type="radio" name="radio1"><i></i>Good</label> </div></div>
						<div class="check_box"> <div class="radio1"> <label><input type="radio" name="radio1"><i></i>Fair</label> </div></div>
						<div class="check_box"> <div class="radio1"> <label><input type="radio" name="radio1"><i></i>Poor</label> </div></div>
						<div class="clear"></div>
					</div>
			</div>
		<h5>Our Support</h5>
			<div class="radio-btns">
					<div class="swit">								
						<div class="check_box_one"> <div class="radio2"> <label><input type="radio" name="radio2" checked=""><i></i>Very Good</label> </div></div>
                        <div class="check_box"> <div class="radio2"> <label><input type="radio" name="radio2"><i></i>Good</label> </div></div>
						<div class="check_box"> <div class="radio2"> <label><input type="radio" name="radio2"><i></i>Fair</label> </div></div>
						<div class="check_box"> <div class="radio2"> <label><input type="radio" name="radio2"><i></i>Poor</label> </div></div>
						<div class="clear"></div>
					</div>
			</div>
		<h5>Overall Satisfaction</h5>
			<div class="radio-btns">
					<div class="swit">								
						<div class="check_box_one"> <div class="radio3"> <label><input type="radio" name="radio3" checked=""><i></i>Very Good</label> </div></div>
                        <div class="check_box"> <div class="radio3"> <label><input type="radio" name="radio3"><i></i>Good</label> </div></div>
						<div class="check_box"> <div class="radio3"> <label><input type="radio" name="radio3"><i></i>Fair</label> </div></div>
						<div class="check_box"> <div class="radio3"> <label><input type="radio" name="radio3"><i></i>Poor</label> </div></div>
						<div class="clear"></div>
					</div>
			</div>
		<h5>Want to rate with us for customer services?</h5>
			<span class="starRating">
				<input id="rating5" type="radio" name="rating" value="5">
				<label for="rating5">5</label>
				<input id="rating4" type="radio" name="rating" value="4">
				<label for="rating4">4</label>
				<input id="rating3" type="radio" name="rating" value="3" >
				<label for="rating3">3</label>
				<input id="rating2" type="radio" name="rating" value="2" checked>
				<label for="rating2">2</label>
				<input id="rating1" type="radio" name="rating" value="1">
				<label for="rating1">1</label>
			</span>
		<form>	
			<h5>Is there anything you would like to tell us?</h5>	
				<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">Type here</textarea>
				<input type="submit" value="Send Feedback">
		</form>
	</div>
	<p class="footer">&copy; 2018 Medkit Feedback. All Rights Reserved | Design by <a href="http://www.prakashkumar.co.in/"> Prakash Thakur</a></p>
</div>

</body>
</html>
