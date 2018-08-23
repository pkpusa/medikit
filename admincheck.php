<?php
session_start();

$uname=$_POST['uname'];
$pass=$_POST['psw'];

require('dbconnection.php');


$tbl_name="admin"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE admin_mail='$uname' and admin_password ='$pass'";
echo "$sql";

$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

//$row=mysql_fetch_array($result);

//echo "\n\n ..nam..".$row['username']."\n\n ..pass..".$row['password'];

if(mysqli_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location: adminlogin.php?value=2"); //
    
    
}
else
{
    if ($result->num_rows > 0)
    {
     while($row = $result->fetch_assoc()) 
     {
         $abc = $row['admin_name'];
         $xyz = $row['admin_id'];
         
    $_SESSION['admin_name'] = $abc;
    $_SESSION['admin_id'] = $xyz;
	//$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
	echo " ....   LOGIN  ....";
	//echo $_SESSION['name'];
	header("location:adminpage.php?value=0");    //
    /*echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='index.php?value=0';
    </SCRIPT>");
	die("");*/
     }
    }
}

?>
