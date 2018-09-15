<?php
session_start();
require "dbconnection.php";

$tbl_name="doctors"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$name=$_POST['fname'];
$mail=$_POST['mail'];
//$gender=$_POST['gnd'];
//$marital=$_POST['mrt'];
//$dob=$_POST['dob'];
$mobile=$_POST['mob'];
$spec=$_POST['spec'];
$adr=$_POST['addr'];
$pass=$_POST['psd'];

$sql2="select * from $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;
while($row=mysqli_fetch_array($result2)){
	if($row['doct_mail']==$mail){
		echo ""."matched";
		$flag=1;
		break;
	}
}
if($flag==1){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='addDoctor.php?value=1';
    </SCRIPT>");
	die("");
	//echo "oh yes";
	}
else{
	$sql="INSERT INTO $tbl_name(doct_name,doct_mail,doct_pass,doct_phone,doct_spec,address)
	VALUES ('$name','$mail','$pass','$mobile','$spec','$adr')";
	$result=mysqli_query($conn,$sql);

    echo $spec;
	//$_SESSION['name']=$fname;
	header("location:viewDoctors.php?value=1");
	
}
//echo "f_name ".$f_name."... ".$l_name."... ".$email.".... ".$password.",,, ".$gender.",,,,".$marital."..... ".$dob.".... ".$mobile."....".$ques.",,,,".$ans;
?>