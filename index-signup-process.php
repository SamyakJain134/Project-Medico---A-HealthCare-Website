<?php
$uid=$_GET["email"];
$pwd=$_GET["pwd"];
$mobile=$_GET["mob"];
$cgy=$_GET["cgy"];

include_once("connection.php");

$query="insert into users values('$uid','$pwd','$mobile',CURRENT_DATE(),'$cgy')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
	echo "Signed Up Successfully";
else
	echo $msg;
?>