<?php
session_start();

$uname=$_POST['docId'];
$pass=$_POST['docPass'];

echo $uname;
echo $pass;

//require('firstimport.php');
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=" "; // Mysql password
$db_name="medikit"; // Database name

$conn=mysqli_connect("$host", "$username")or die("cannot connect");

mysqli_select_db($conn,$db_name)or die("cannot select DB");

$tbl_name="doctors"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE doct_mail='$uname' and doct_pass='$pass'";
echo "$sql";

$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

//$row=mysql_fetch_array($result);

//echo "\n\n ..nam..".$row['username']."\n\n ..pass..".$row['password'];

if(mysqli_num_rows($result) < 1)
{
	echo " .... LOGIN TRY  ....";
	$_SESSION['error'] = "1";
	header("location: doctorlogin.php ?value=1"); //
    
    
}
else
{
    if ($result->num_rows > 0)
    {
     while($row = $result->fetch_assoc()) 
     {
         $doctorname = $row['doct_name'];
         $doctid = $row['doctorID'];
         
    $_SESSION['doct_name'] = $doctorname;
    $_SESSION['doctorID'] = $doctid;
	//$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
	echo " ....   LOGIN  ....";
	echo $_SESSION['doct_name'];
	header("location:doctorPage.php ?value=0");    //
    /*echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='index.php?value=0';
    </SCRIPT>");
	die("");*/
     }
    }
}

?>

	