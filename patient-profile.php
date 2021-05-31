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
    $(document).ready(function(){
       $("#btnFetchProfile").click(function(){
//				alert();
				var uid=$("#uid").val();
				var url="patient-profile-fetch.php?uid="+uid;
//           alert(url);
				$.getJSON(url,function(jsonArray){
                    //alert(JSON.stringify(jsonArray));
					if(jsonArray.length==0)
						{
							alert("Invalid uid"); 
						}
					else
                    {
					
					$("#name").hide().val(jsonArray[0].name).show(800);
					$("#gender").hide().val(jsonArray[0].gender).slideDown(800);
					$("#age").hide().val(jsonArray[0].age).show(800);
                        $("#city").hide().val(jsonArray[0].city).show(800);
					$("#state").hide().val(jsonArray[0].state).slideDown(800);
					$("#zip").hide().val(jsonArray[0].zip).show(800);
                        $("#email").hide().val(jsonArray[0].email).show(800);
					$("#contact").hide().val(jsonArray[0].address).slideDown(800);
					$("#problems").hide().val(jsonArray[0].problems).show(800);
                       
					
					
					//$("#x").hide().prop("src","uploads/"+jsonArray[0].ppic).fadeIn().css("border-radius","50%");
                        //$("#y").hide().prop("src","uploads/"+jsonArray[0].cpic).fadeIn().css("border-radius","50%");
					}
				});
        
       });
        
		 $("#signup").click(function(){
             //alert();
             if(uid==false)
             {
               alert("Fill Values");  
             }
			 else
             {
             var uid=$("#uid").val();
			 var name=$("#name").val();
             var gender=$("#gender").val();
            var age=$("#age").val();
			 var city=$("#city").val();
             var state=$("#state").val();
            var zip=$("#zip").val();
			 var email=$("#email").val();
                  var contact=$("#contact").val();
             var problems=$("#problems").val(); 
                 
                 
			 var url="patient-profile-process.php?uid="+ uid+"&name="+ name+"&gender="+ gender+"&age="+ age +"&city="+ city+"&state="+state+ "&zip="+ zip+"&email="+ email+"&contact="+ contact + "&problems="+ problems;
			 $.get(url,function(response)
				   {
				 	alert(response);
			 		});   
             }
			 

		 });
        $("#btnUpdate").click(function(){
                var uid = $("#uid").val();
                var name = $("#name").val();
                var gender = $("#gender").val();
                var age = $("#age").val();
                var city = $("#city").val();
                var state = $("#state").val();
                var zip=$("#zip").val();
                var email = $("#email").val();
                var contact = $("#contact").val();
                var problems = $("#problems").val();
                var url = "patient-update-process.php?uid="+ uid+"&name="+ name+"&gender="+ gender+"&age="+ age +"&city="+ city+"&state="+state+ "&zip="+ zip+"&email="+ email+"&contact="+ contact + "&problems="+ problems;

                $.get(url,function(response){
                    alert(response);
                });
            });
			
    });
    </script>
    <style>
        body
        {
            background-image: url(img/slides/slide3/bg.jpg);
            background-position: center;
        }
    </style>
    <title>Patient Profile</title>
</head>
<body>
    <center><h1 class="display-1">Patient Profile</h1></center>
  <form>
  <div class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">UID</label>
      <input type="text" class="form-control" id="uid" name="uid" value='<?php echo $_SESSION["activeuser"];?>' disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-md-2 form-group">
					<label for="">&nbsp;</label>
					
					<input type="button" id="btnFetchProfile"  class="form-control btn btn-secondary" value="Fetch Profile">

				</div>
  </div>
<!--
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
-->
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Gender</label>
      <select id="gender" class="form-control">
        <option selected>Choose...</option>
        <option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Transgender">Transgender</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Age</label>
      <input type="text" class="form-control" id="age" name="age">
    </div>
      </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="state" class="form-control">
        <option selected>Choose...</option>
     <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="zip" name="zip">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact</label>
      <input type="text" class="form-control" id="contact" name="contact">
    </div>
    
  </div>
  <div class="form-row">
      <div class="form-group col-md-12">
          <label for="inputProblem">Problem</label>
          <input type="text" class="form-control" id="problems" name="problems">
      </div>
  </div>
  <center>
      <button type="button" class="btn btn-success" id="signup">Enter Details</button>
      <button type="button" class="bg-info" id="btnUpdate"> Update Profile</button>
  </center>
  
  </div>
</form>
</body>
</html>