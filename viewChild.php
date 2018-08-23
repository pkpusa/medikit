<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

require "usrsessioncontrol.php";
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
    <script>
function myFunction() {
    window.print();
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
    <h1><a href ="index.php?value=0"></a> Here is Your Child Details </h1>
	<div class="register-form-w3layouts">
        <div class ="copyright">
            
            <p> </p>
            <?php

/*
session_start();
if(isset($_SESSION['name'])){
	$user = $_SESSION['userid'];
}
	else{
		header("location:userlogin.php?value=0");
		
	}*/

require "dbconnection.php";

$tbl_name="tblchild";
/*
$mail=$_SESSION['email'];
if($mail == "")
{
    echo "No Records Found";
}
else
{*/
//$sql = "SELECT id, username, Name, email, mob, addr FROM $tbl_name";
$sql = "SELECT * FROM $tbl_name  WHERE userid ='$user' ";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
     while($row = $result->fetch_assoc()) 
     {
        echo "</br>"."__________________________________";
        echo "</br>"." Child Details :-";
        echo "</br>"."__________________________________";
         echo "</br></br>".$row["f_name"];
         echo " ".$row["l_name"];
        
         echo "</br>"."Blood Group  : ".$row["dob"];
         echo "</br>"."Gender       : : ".$row["gender"];
         echo "</br>"."Height       : ".$row["height"];
         echo "</br>"."Weight       : ".$row["weight"];
         echo "</br>"."Blood Group  : ".$row["bloodgrp"];
         echo "</br>"."Allergy      : ".$row["allergy"];
         echo "</br>"."Medication   : ".$row["medication"];
        
         
         echo "</br>"."__________________________________";
         echo "</br>"." Parents Details :-";
        echo "</br>"."__________________________________";
         echo "</br></br>"."Parent Name  : ".$row["pfname"];
         echo " ".$row["plname"];
         echo "</br>"."RelationShip : ".$row["relation"];
          echo "</br>"."Email Id     : ".$row["email"];
         echo "</br>"."Contact No   : ".$row["mobile"];
          echo "</br>"."Address      : ".$row["addr"];
         
     }
} else
{
    echo "0 results";
}



?>
                 
            </p></div>
        
        <button onclick="myFunction()" style = "">Print this page</button>
    

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



 <script type="text/javascript">
$(document).ready(function(){
  $("#cpass").click(function(){
    $(".pass1").fadeOut(1000,"linear",function(){$(".pass2").fadeIn(1000);});
	
  });
});

$(document).ready(function(){
  $("#editp1").click(function(){
    $(".pass1").fadeOut(1000,"linear",function(){$(".pass3").fadeIn(1000);});
	
  });
});

$(document).ready(function(){
  $("#editp2").click(function(){
    $(".pass3").fadeOut(1000,"linear",function(){$(".pass1").fadeIn(1000);});
  });
});


function checkk(){

var p1=document.getElementById("p1").value;
var p2=document.getElementById("p2").value;
//alert(" p1 : "+p1+"  p2 : "+p2);

	if(p1 == p2)
	{document.getElementById("match").style.visibility="hidden";
		document.getElementById("sub").disabled=false;
	}else
	{
		document.getElementById("match").style.visibility="";
		document.getElementById("sub").disabled=true;
	}
}

function check123()
	{
		var c=document.getElementById("p1").value;
		//alert(c.length);
		if(c.length < 8 )
		{
			document.getElementById("ps").innerHTML="<br/><font color=red>password must be atleast 8 - 32 char long</font>";
			return false;
		}
		else
		{
			document.getElementById("ps").innerHTML="";
			return true;
		}
	}
</script>