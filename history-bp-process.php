<?php
include_once("connection.php");
$uid=$_GET["uidd"];
$datef=$_GET["datef"];
$datet=$_GET["datet"];

$query="select * from bprecords where uid='$uid' and dateofrecord>='$datef' and dateofrecord<='$datet'";    
$result=mysqli_query($dbcon,$query);
$ary=array();
while($row=mysqli_fetch_array($result))
{
    $ary[]=$row;
}    
echo json_encode($ary);
?>
