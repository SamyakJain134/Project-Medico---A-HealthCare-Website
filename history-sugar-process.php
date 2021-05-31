<?php
include_once("connection.php");
$uid=$_GET["uid"];
$dfrom=$_GET["dfrom"];
$dto=$_GET["dto"];

$query="select * from sugarrecord where uidd='$uid' and dateofrecordd>='$dfrom' and dateofrecordd<='$dto'";    
$result=mysqli_query($dbcon,$query);
$ary=array();
while($row=mysqli_fetch_array($result))
{
    $ary[]=$row;
}    
echo json_encode($ary);
?>
