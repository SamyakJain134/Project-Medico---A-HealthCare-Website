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

    $query="update patients set name='$name',gender='$gender',age='$age',city='$city',state='$state',zip='$zip',email='$email',contact='$contact',problems='$problems' where uid='$uid'";
    mysqli_query($dbcon,$query);
    $msg=mysqli_error($dbcon);
    if($msg=="")
        echo"Profile saved successfully";
    else
        echo $msg;
?>

