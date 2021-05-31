   <?php
    include_once("connection.php");
   
    $patientid=$_POST["patientid"];
    $doctorname=$_POST["doctorname"];
    $dovisit=$_POST["dovisit"];
    $city=$_POST["city"];
    $hospital=$_POST["hospital"];
    $problem=$_POST["problem"];
    $nextdov=$_POST["nextdov"];
    $discussion=$_POST["discussion"];
    


    $slippic=$_FILES["slippic"]["name"];
    $tmp_Name1=$_FILES["slippic"]["tmp_name"];

    $cpic=$_FILES["cpic"]["name"];
    $tmp_Name2=$_FILES["cpic"]["tmp_name"];
    
    move_uploaded_file($tmp_Name1,"uploads/".$slippic);
    move_uploaded_file($tmp_Name2,"uploads/".$cpic);
    $query="insert into slips values(null,'$patientid','$doctorname','$dovisit','$city','$hospital','$problem','$nextdov','$discussion','$slippic','$cpic')";
    mysqli_query($dbcon,$query);
    $msg=mysqli_error($dbcon);
    if($msg=="")
        echo "Profile Saved";
    else
        echo $msg;
    
?>