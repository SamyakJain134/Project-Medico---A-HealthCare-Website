   <?php
    include_once("connection.php");
    $uid=$_POST["uid"];
    $dname=$_POST["dname"];
    $contact=$_POST["contact"];
    $spec=$_POST["spec"];
    $qual=$_POST["qual"];
    $studied=$_POST["studied"];
    $exp=$_POST["exp"];
    $hospital=$_POST["hospital"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $email=$_POST["email"];
    $website=$_POST["website"];


    $ppic=$_FILES["ppic"]["name"];
    $tmp_Name1=$_FILES["ppic"]["tmp_name"];

    $cpic=$_FILES["cpic"]["name"];
    $tmp_Name2=$_FILES["cpic"]["tmp_name"];
    
    move_uploaded_file($tmp_Name1,"uploads/".$ppic);
    move_uploaded_file($tmp_Name2,"uploads/".$cpic);
    $query="insert into doctors values('$uid','$dname','$contact','$spec','$qual','$studied','$exp','$hospital','$address','$city','$state','$email','$website','$ppic','$cpic')";
    mysqli_query($dbcon,$query);
    $msg=mysqli_error($dbcon);
    if($msg=="")
        echo "Profile Saved";
    else
        echo $msg;
    
?>