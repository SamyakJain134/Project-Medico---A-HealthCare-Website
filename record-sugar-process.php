<?php
$uidd=$_GET["uidd"];
$dateofrecordd=$_GET["dateofrecordd"];
$timeofrecord=$_GET["timeofrecord"];
$sugartime=$_GET["sugartime"];
$age=$_GET["age"];
$sugarresult=$_GET["sugarresult"];
$medintake=$_GET["medintake"];
$urineresult=$_GET["urineresult"];

include_once("connection.php");

$query="insert into sugarrecord values('$uidd','$dateofrecordd','$timeofrecord','$sugartime','$age','$sugarresult','$medintake','$urineresult')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
	echo "Record Saved Successfully";
else
	echo $msg;
?>