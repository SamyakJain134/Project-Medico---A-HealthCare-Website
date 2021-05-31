<?php
$uid=$_GET["uid"];
$dateofrecord=$_GET["dateofrecord"];
$syst=$_GET["syst"];
$dia=$_GET["dia"];
$pulse=$_GET["pulse"];

include_once("connection.php");

$query="insert into bprecords values('$uid','$dateofrecord','$syst','$dia','$pulse')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
	echo "Record Saved Successfully";
else
	echo $msg;
?>