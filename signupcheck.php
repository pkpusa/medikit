<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=" "; // Mysql password
$db_name="medikit"; // Database name

$conn=mysqli_connect("$host", "$username")or die("cannot connect");

mysqli_select_db($conn,$db_name)or die("cannot select DB");

$tbl_name="users"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$name=$_POST['fname'];
$lname=$_POST['lname'];

$mail=$_POST['mail'];
//$gender=$_POST['gnd'];
//$marital=$_POST['mrt'];
//$dob=$_POST['dob'];
$mobile=$_POST['mob'];
//$ques=$_POST['ques'];
//$ans=$_POST['ans'];
$pass=$_POST['psd'];

$sql2="select * from $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;
while($row=mysqli_fetch_array($result2)){
	if($row['email']==$mail){
		echo ""."matched";
		$flag=1;
		break;
	}
}
if($flag==1){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='usersignup.php?value=1';
    </SCRIPT>");
	die("");
	//echo "oh yes";
	}
else{
	$sql="INSERT INTO $tbl_name(fname,lname,email,phone,password)
	VALUES ('$name','$lname','$mail','$mobile','$pass')";
	$result=mysqli_query($conn,$sql);

	$_SESSION['name']=$fname;
	header("location:userlogin.php?value=1");
	
}
//echo "f_name ".$f_name."... ".$l_name."... ".$email.".... ".$password.",,, ".$gender.",,,,".$marital."..... ".$dob.".... ".$mobile."....".$ques.",,,,".$ans;
?>