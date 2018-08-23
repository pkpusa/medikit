<?php
session_start();
if(isset($_SESSION['admin_id'])){
	$admin = $_SESSION['admin_name'];
}
	else{
		header("location:adminlogin.php?value=0");
		
	}
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
	<title>Medikit- Admin</title>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="MediBulk Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- for banner css -->
 
<!-- //for banner css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!--//fonts-->
</head>
<style>

</body>
/* Style design for viewing no of patents*/
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	text-align : center;
	padding : 10px;
}

td,th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 112px;
    padding-bottom: 12px;
	padding-left: 112px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
	height : 100px;
	
}

</style>
<?php 
	include "navbar.php";
?>
<body style ="background-color:#20B2AA;">
		<div style="float:right; font-size:20px;margin-top:20px;">
			<p style ="color:white; font-size:25px;">
         
			
			</div

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

	<?php 

	?>
	
	<!--background-->
    <h1><a href ="#"> </a>Medikit Admin Page </h1>
	<div style="margin-top:50px;">
	<div class="services" id="services">
	<div class="container">
		<div class="w3-heading-all services-head">
			<h3><?php
			 if(isset($_SESSION['admin_id']))	
			 {
			 echo "Welcome,   ".$_SESSION['admin_name']."&nbsp;&nbsp;&nbsp;<a href=\"adminlogout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
                ?></p>
				<a href="adminlogin.php?value=0" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="home.php?value=0" class="btn btn-info">HomePage</a>
			<?php } ?></h3>
		</div>	

		<div class="w3-services-grids">
		<div class="col-md-4 w3-services-grids1 ">
			<div class=" w3-services-grid2">
                <a href = "viewUsers.php?value=0"><i class="fa fa-laptop" aria-hidden="true"></i></a>
				<h3>View Users</h3>
			<div class="w3-services-grid1-left">
					<h4></h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
            <div class="col-md-4 w3-services-grids1">
			<div class="w3-services-grid1">
			<a href="viewDoctors.php?value=0"><i class="fa fa-user-md" aria-hidden="true"></i></a>
				<h3>View Doctors</h3>
				<div class="w3-services-grid1-left">
					<h4></h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1">
			<div class=" w3-services-grid6">
			<a href="addDoctors.php?value=0"><i class="fa fa-ambulance" aria-hidden="true"></i></a>
				<h3>Add Doctor</h3>
				<div class="w3-services-grid1-left">
					<h4></h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			
			
			<div class="clearfix"></div>
		</div>
		</div>
</div>
</div>
</div>
	<!--copyright-->
	<div >
		<p>&copy; 2018 MediKit  . All Rights Reserved | Design by
			<a href="http://www.prakashkumar.co.in/" target="_blank">Prakash Thakur</a>
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
<!--
<?php
if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}

?>	-->