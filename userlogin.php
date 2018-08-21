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
	<title>pLEASE lOGIN Here</title>
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
				         
				
		<?php	 }
			}
			//else{ echo "hi";}
		?>
	<!--background-->
    <h1><a href ="localhost/web/index.html"> </a> 
	<?php
		$val=$_GET['value'];
			if($val==1){
				?>
				<h1><a>Registration Sucessfull</a></h1>
					<?php
	}?>
	</h1>
	
	<h1>Please Login Here </h1>
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="logincheck.php" method="post">
			<h3 class="sub-heading-agileits">LOGIN </h3>
			<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="uname" placeholder="Enter Username" required="">
				
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
    font-family: 'Source Sans Pro', sans-serif;" type="password" name="psw" placeholder="Enter Password" required="">
				
	<?php 
                $val=$_GET['value'];
	           if($val==2){
	           ?>
                <span style ="color :red; font-famiy :sans-serif; font-size:16px;"><h3><a>Incorrect Mail ID Or Password</a></h3></span>
	           <?php
	               }
                else
                {
                    
                }
                ?>
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
