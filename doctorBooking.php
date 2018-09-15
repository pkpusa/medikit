
<?php 
	require "usrsessioncontrol.php";
	include "testing.php";
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$servername = "localhost";
$username = "root";
//$password = " ";
$dbname = "medikit";

// Create connection
$conn = mysqli_connect("$servername", "$username")or die("cannot connect");
// Check connection
mysqli_select_db($conn,"$dbname")or die("cannot select DB");

$tbl_name = "doctors";
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/
$sql = "SELECT doctorID, doct_name, doct_spec FROM $tbl_name ORDER BY doctorID ASC";
//$sql = "SELECT id, firstname, lastname FROM doctors//";
$result = mysqli_query($conn, $sql);




//$get = $conn->query($sql);
//$result=mysqli_query($conn,$get) or trigger_error($get);
$spec ="Specialist";
$option = '';
 //while($row = $get->fetch_assoc())
 if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))

{
  $opt = $row['doct_name']." (".$row["doct_spec"]." ".$spec.")";
  $option .= '<option value = "'.$row['doctorID'].'">'.$opt.'</option>';
}
 }
?>


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
    
</head>
    <style>  

table, th, td {
    border: 1px solid black;
    margin: 5px;
    padding:5px;
}

  /*      
div.head{
        float:right;
        }
        
        h1 a{
            
            text-decoration: none;
            color: aliceblue;
            text-decoration-style: solid;
            font-family: cursive;
            font-size: 50px;
            
        }
        
.nav{
            
    background-color: red;
    color: aliceblue;
    padding: 5px;
        }
        
form {
    margin-top: 50px;
    margin-bottom: 100px;
    border-radius: 30px;
    background-color: #f2f2f2;
    padding: 20px;
    left:10%;
    

    
    position: absolute;
}
*/
.opc{
    filter: alpha(opacity=60);   
    opacity: 0.9;
    
    }
/*
.footer{
 margin-top: 50px;
       
       text-align: center;    
       width: 100%;
        bottom: 2%;
        height: 100px;
        background-color: dimgrey;
        position: fixed;
        margin-top: 50px;
        
        
}
        
.tbl{
            
    overflow:scroll; 
    max-height :500px;">
        }
        
.del{
        
    width: 500px;
    
        
        }

*/

        
    </style>

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

<!--   Javascript function for changing the booking slots on the page without refreshing -->
	<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
		
    }
}
</script>
    <h1><a href ="localhost/web/index.html"> </a> Doctor Appointment Booking </h1>
	<div>
	<div style="float:left; margin-left:100px;">
	<div class="register-form-w3layouts">
        <h3 class="sub-heading-agileits">Enter Details for Appointment</h3>
		<!-- Form starts here -->
		<div class="agileits_reservation">
					<form action="booking_chk.php" method="post">
						<div class="cuisine"> 
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							<input type="text" name="name" placeholder="Enter name" required="">
						</div>
						<div class="phone_email"> 
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<input type="text" name="phone" placeholder="Phone" required=""> 
						</div>
						<div class="phone_email1"> 
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<input type="email" name="email" placeholder="Email" required="">
						</div>
						<div  class="field-agileinfo-spc form-w3-agile-text1">
						<select class="form-control" name="doctor" onchange="showUser(this.value)"> 
							<option selected='true' disabled='true'> Choose Doctor </option>
								<?php echo $option; ?>
						</select>
						</div>
						<div class="clearfix"> </div>
						<div class="agileits_reservation_grid">
							<div  class="span1_of_1 book_date"> 
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input class="date" id="datepicker" name="date" placeholder="Select Date"  type="date" required="" max ="<?php echo date('Y-m-d',time()+60*60*24*90);?>" min="<?php echo date('Y-m-d')?>" value="<?php if(isset($_POST['date'])){echo $_POST['date'];}else {echo date('Y-m-d');}?>">
							</div>
							<!--<div class="span1_of_1 section_room"> 
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>  
								<input type="text" name="Time" class="timepicker" value=" Time">	 
							</div>-->
                            <div class="field-agileinfo-spc form-w3-agile-text2">
                    <select class="form-control" name="timeslot">
                        
                       
						<option>Time Slot</option>
						<option value="9:00-9:30">9:00 - 9:30</option>
						<option value="9:30-10:00">9:30 - 10:00</option>
						<option value="10:00-10:30">10:00 - 10:30</option>
                        <option value="10:30-11:00">10:30 - 11:00</option>
                        <option value="11:00-11:30">11:00 - 11:30</option>
                        <option value="11:30-12:00">11:30 - 12:00</option>
                        <option value="12:00-12:30">12:00 - 12:30</option>
                        <option value="1:00-1:30">1:00 - 1:30</option>
					</select>
					<!-- <input type="text" name="bloodgrp" placeholder="Blood Group" required=""> -->
				</div>
            </div>
						<?php
	                       $val=$_GET['value'];
	                           if($val==1){
	                   ?>
                        <h3><a style = "font-size :15px; color : red;">Slot is booked already, Please try with different date or time</a></h3>
	                   <?php
	                       } ?>
                    <input type="submit" value="Submit">
			         <input type="reset" value="Clear Form">
                            
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
	</div>
	<div style="float:right; margin-right:250px; margin-top:100px;">
    <!-- displaying booked date and time -->
    <div  class="register-form-w3layouts">
	<div style ="color :white;">
	<div id="txtHint"><b>Booked Slots will be displayed here.....</b></div>
	</div>	
	</div>	
	</div>
	</div>
        <?php
		/*
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
		
		$sql = "SELECT doctors.doctorId, doctors.doct_name, booking.date, booking.timeslot FROM booking INNER JOIN doctors ON booking.doctorID  = doctors.doctorID";
		$result = $conn->query($sql);
				
		if ($result->num_rows > 0) {
			echo"Booked Slots for this Week:";
			echo "<table><tr><th>Doctor </th><th>Date </th><th>Time :</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["doct_name"]. "</td><td>" . $row["date"]. "</td><td>" . $row["timeslot"]. "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		
		$conn->close();
					*/?>
    
    

	<!--//copyright-->
	<script type="text/javascript" src="jsChild/jquery-2.2.3.min.js"></script>
	<!-- Calendar Js -->
	<script src="jsChild/jquery-ui.js"></script>
	<script>
		$(function () {
			//$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
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
