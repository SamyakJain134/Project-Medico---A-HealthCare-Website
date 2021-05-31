<?php
$uid=$_GET["uid"];
$name=$_GET["name"];
$gender=$_GET["gender"];
$age=$_GET["age"];
$city=$_GET["city"];
$state=$_GET["state"];
$zip=$_GET["zip"];
$email=$_GET["email"];
$contact=$_GET["contact"];
$problems=$_GET["problems"];

include_once("connection.php");

$query="insert into patients values('$uid','$name','$gender','$age','$city','$state','$zip','$email','$contact','$problems')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
	echo "Values Saved Successfully";
else
	echo $msg;
?>