<?php
session_start();
if(isset($_SESSION['admin_id'])){
	$doctor = $_SESSION['admin_name'];
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
</head>
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

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

<body>
		<div style="float:right; font-size:20px;margin-top:20px;">
			<p style ="color:white; font-size:25px;">
            <?php
			 if(isset($_SESSION['doctorID']))	
			 {
			 echo "Welcome,   ".$_SESSION['doct_name']."&nbsp;&nbsp;&nbsp;<a href=\"doctorlogout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
                ?></p>
				<a href="doctorlogin.php?value=0" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="usersignup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
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
    <h1><a href ="localhost/web/index.html"> </a>
    <?php
			 if(isset($_SESSION['admin_id']))	
			 {
			 echo "Welcome,   ".$_SESSION['admin_name']."&nbsp;&nbsp;&nbsp;<a href=\"doctorlogout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
                ?></p>
				<a href="doctorlogin.php?value=0" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="usersignup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
    
    </h1>
	<div class="register-form-w3layouts">
		<!-- Form starts here -->
		<form action="doctorlogout.php" method="post">
		<table><tr><th>S No. </th><th>Name </th><th>email</th><th>Phone</th><th>Password</th><th>		</th></tr>
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medikit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users ";
$result = $conn->query($sql);
        


    
	// output data of each row
	$sno = 0;
    while($row = $result->fetch_assoc()) {
		$pid = $row['userid'];
		$uname = $row['fname'];
		$ulname = $row['lname'];
		$umail = $row['email'];
        $uphone = $row['phone']; 
        $upass = $row['password']; 
        $name = $uname." ".$ulname;
		$sno +=1; ?>

		

		<tr> <td><?php echo $sno; ?> </td>
		<td><?php echo $name; ?></td>
		<td><?php echo $umail;?></td>
		<td><?php echo $uphone;?></td>
		<td><?php echo $upass;?></td>
		<td><a href="ViewDetails.php?id=<?php echo $pid; ?>">
		<span style="color: white; background-color:red;">Remove User</span></a></td>
		</tr>
		
    <?php } ?>

			
			<div class="clear"></div>
			</table>
			<input type="submit" value="Logout">
			<input type ="reset" value ="Home Page" onclick="Redirect();">
			
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
<script>
function Redirect()	
{
	window.location="home.php";
}
</script>
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