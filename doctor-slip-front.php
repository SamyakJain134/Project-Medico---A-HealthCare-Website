<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/jquery-1.8.2.min.js"></script>


	<script src="js/bootstrap.min.js"></script>
   <script>
    function showpreview(file) {

				if (file.files && file.files[0]) {
					var reader = new FileReader();
					reader.onload = function(ev) {
						$('#x').attr('src', ev.target.result);
					}
					reader.readAsDataURL(file.files[0]);
				}

			}
       function showprevieww(file) {

				if (file.files && file.files[0]) {
					var reader = new FileReader();
					reader.onload = function(ev) {
						$('#y').attr('src', ev.target.result);
					}
					reader.readAsDataURL(file.files[0]);
				}

			}
    </script>
    <style>
        body
        {
            background-image: url(img/dummy/bg1.jpg);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <center><h1 class="display-1">Doctor Slip</h1></center>
  <form action="doctor-slip-process.php" method="post" enctype="multipart/form-data">
  <div class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Patient UID</label>
      <input type="text" class="form-control" id="patientid" name="patientid" value='<?php echo $_SESSION["activeuser"];?>' disabled>
    </div>
    
  </div>
    <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputPassword4">Doctor Name</label>
      <input type="text" class="form-control" id="doctorname" name="doctorname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Date Of Visit</label>
      <input type="date" class="form-control" id="dovisit" name="dovisit">
    </div>
     </div>
      <div class="form-row">
     <div class="form-group col-md-3">
      <label for="inputPassword4">City</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="form-group col-md-9">
      <label for="inputPassword4">Hospital Name</label>
      <input type="text" class="form-control" id="hospital" name="hospital">
    </div>
     </div>
     
     <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputPassword4">Problem</label>
      <input type="text" class="form-control" id="problem" name="problem">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Next Date of Visit</label>
      <input type="date" class="form-control" id="nextdov" name="nextdov">
    </div>
     </div>
     
       <div class="form-row">
     <div class="form-group col-md-12">
      <label for="inputPassword4">Discussion WIth Doctor</label>
      <input type="text" class="form-control" id="discussion" name="discussion">
    </div>  
     </div>
     <div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Upload Doctor Slip</h5>
        <img src="pics/face.png" id="x" class="card-img-top" width="50" height="150" alt="...">
        <p class="card-text">SLIP HERE </p>
       <input type="file" onchange="showpreview(this);" required name="slippic" id="slippic" name="slippic">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Upload Your Pic</h5>
        <img src="pics/face.png" id="y" class="card-img-top" width="50" height="150" alt="...">
        <p class="card-text">PIC HERE</p>
        <input type="file" onchange="showprevieww(this);" required name="cpic" id="cpic" name="cpic">
      </div>
    </div>
  </div>
</div>
     
      </div>
      <center><button type="submit" class="btn btn-danger" style="width:100px">Sign in</button></center>
      </form>
</body>
</html>