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
	<title>Medikit User Registration</title>
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
    
    <script>
function check1()
	{
		var c=document.forms["usersignup"]["psd"].value;
		//alert(c.length);
		if(c.length < 8 )
		{
			document.getElementById("ps").innerHTML="<br/><font color=red>password must be atleast 8 - 32 char long</font>";
			return false;
		}
		else
		{
			document.getElementById("ps").innerHTML="";
			pass=c;
			return true;
			//sub++;
			//valid1();
		//	alert(sub);
		}
	}
// confirm password
	function confirm1()
	{
		var c=document.forms["usersignup"]["cpsd"].value;
		//alert(c);
		if(c!=pass)
		{
			document.getElementById("cps").innerHTML="<br/><font color=red>password not match </font>";
			return false;
		}
		else
		{
			document.getElementById("cps").innerHTML="";
			//sub++;
			return true;
			//valid1();
			//alert(sub);
		}
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
    <h1><a href ="localhost/web/index.html"> </a> Please Sign Up Here </h1>
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form name ="usersignup" action="signupcheck.php" method="post">
			<h3 class="sub-heading-agileits">SIGN UP </h3>
            <?php
	$val=$_GET['value'];
	if($val==1){
	?>
<h3><a>User already exists</a></h3>
	<?php
	}
	

?>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="fname" placeholder="First Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="lname" placeholder="Last Name" required="">
				</div>
			</div>
            <!--<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="uname" placeholder="Enter Name" required="">
				
			</div>-->
			<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="email" name="mail" placeholder="Enter Email" required="">
				
			</div>
            <div class="field-agileinfo-spc form-w3-agile-text2">
				<input type="text" name="mob" placeholder="Phone Number" required="" pattern="[789][0-9]{9}">
            </div>
            
            <div class="field-agileinfo-spc form-w3-agile-text2">
					<input style="width: 100%;
    font-weight: 300;
    color: #fff;
    font-size: 16px;
    letter-spacing: 1.2px;
    padding: 10px 10px;
    outline: none;
    background: rgba(255, 255, 255, 0);
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.27);
    box-sizing: border-box;
    font-family: 'Source Sans Pro', sans-serif;" type="password" name="psd" placeholder="Enter Password" required="" onblur="return check1()"><span id="ps" ></span>
				
			</div>
            <div class="field-agileinfo-spc form-w3-agile-text2">
					<input style="width: 100%;
    font-weight: 300;
    color: #fff;
    font-size: 16px;
    letter-spacing: 1.2px;
    padding: 10px 10px;
    outline: none;
    background: rgba(255, 255, 255, 0);
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.27);
    box-sizing: border-box;
    font-family: 'Source Sans Pro', sans-serif;" type="password" name="cpsd" placeholder="Re-Enter Password" required="" onblur="return confirm1()"><span id="cps" ></span>
				
			</div>
			<input type="submit" value="Login">
			<input type="reset" value="Sign Up">
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
<?php
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}

?>	


<!--
<td style="border-top:0px;"><input type="password" class="input-block-level" name="psd" placeholder="Enter the password" onblur="return check1()"> <span id="ps" ></span></td>
		
		<tr>
			<td style="border-top:0px;"> Confirm Password <font color=red>* </font> </td>
			<td style="border-top:0px;"><input type="password" class="input-block-level" name="cpsd" placeholder="Re-type the password" onblur="return confirm1()"> <span id="cps" ></span></td>
		</tr>

-->
