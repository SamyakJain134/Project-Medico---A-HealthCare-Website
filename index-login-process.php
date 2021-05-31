<?php
session_start();
$uid=$_GET["email"];
$pwd=$_GET["pwd"];


include_once("connection.php");
include_once("SMS_OK_sms.php");

$query="select * from users where uid='$uid' AND  pwd='$pwd'";
$table=mysqli_query($dbcon,$query);
$row=mysqli_fetch_array($table);
if(mysqli_num_rows($table)==0)
    echo "Unauthorized";
    /*$resp=SendSMS($mob,"You are signed up successfully...");
	echo "Signed Up Successfully.<br>".$resp;*/
    
else
{
    $_SESSION["activeuser"]=$uid;
    echo $row["cgy"];  
}
    
/*mysqli_query($dbcon,$query);*/
/*$msg=mysqli_error($dbcon);
if($msg=="")
	echo "Logged In Successfully";
else
	echo $msg;*/
?>
