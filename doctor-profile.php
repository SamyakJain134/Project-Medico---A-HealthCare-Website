<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/jquery-1.8.2.min.js"></script>


	<script src="js/bootstrap.min.js"></script>
   <script>
            
       
       
               
//	 $(document).ready(function(){
//         uid=false;
//         dname=false;
//         contact=false;
//         spec=false;
//         qual=false;
//         studied=false;
//         exp=false;
//         hospital=false;
//         address=false;
//         city=false;
//         state=false;
//         email=false;
//         website=false;
//         ppic=false; 
//         cpic=false;
//         
//         
////		 $("#Signupp").click(function(){
////             if(uid==false||dname==false||contact==false||spec=false||qual=false||studied=false||exp=false||hospital=false||address=false||city=false||state=false||email=false||website=false||ppic=falucpic=false)
////             {
////               alert("Fill Values");  
////             }
////			 else
////             {
////             var uid=$("#uid").val();
////			 var txtPwd=$("#txtPwd").val();
////             var txtMob=$("#txtMob").val();
////                 
////                 
////			 var url="index-signup-process.php?email="+ txtUid+"&pwd="+ txtPwd+"&mob="+ txtMob+"&cgy="+ $cgy;
////			 
////			 $.get(url,function(response)
////				   {
////				 	alert(response);
////			 		});   
////             }
////			 
////
////		 });
//     });
//		
       $(document).ready(function(){
       $("#btnFetchProfile").click(function(){
//				alert();
				var uid=$("#uid").val();
				var url="doctor-profile-fetch.php?uid="+uid;
//           alert(url);
				$.getJSON(url,function(jsonArray){
                    alert(JSON.stringify(jsonArray));
					if(jsonArray.length==0)
						{
							alert("Invalid uid"); 
						}
					else
                    {
					
					$("#dname").hide().val(jsonArray[0].dname).show(800);
					$("#contact").hide().val(jsonArray[0].contact).slideDown(800);
					$("#spec").hide().val(jsonArray[0].spec).show(800);
                        $("#qual").hide().val(jsonArray[0].qual).show(800);
					$("#studied").hide().val(jsonArray[0].studied).slideDown(800);
					$("#exp").hide().val(jsonArray[0].exp).show(800);
                        $("#hospital").hide().val(jsonArray[0].hospital).show(800);
					$("#address").hide().val(jsonArray[0].address).slideDown(800);
					$("#city").hide().val(jsonArray[0].city).show(800);
                        $("#state").hide().val(jsonArray[0].state).show(800);
					$("#email").hide().val(jsonArray[0].email).slideDown(800);
					$("#website").hide().val(jsonArray[0].website).show(800);
//                        $("#ppic").hide().val(jsonArray[0].ppic).show(800);
//					$("#cpic").hide().val(jsonArray[0].cpic).slideDown(800);
					
					
					$("#x").hide().prop("src","uploads/"+jsonArray[0].ppic).fadeIn().css("border-radius","50%");
                        $("#y").hide().prop("src","uploads/"+jsonArray[0].cpic).fadeIn().css("border-radius","50%");
					}
				});
			});
           });
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
        body{
            border: 1px solid black;
        }
    
    
    </style>
</head>
<body>
   <center><h1 class="display-1">Doctors Profile</h1></center>
    <form action="doctor-profile-process.php" method="post" enctype="multipart/form-data" >
    <div class="container">
  <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Doctor UID</label>
      <input type="text" class="form-control" id="uid" name="uid" placeholder="uid">
    </div>
    
<div class="col-md-2 form-group">
					<label for="">&nbsp;</label>
					
					<input type="button" id="btnFetchProfile"  class="form-control btn btn-secondary" value="Fetch Profile">

				</div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Doctor Name</label>
      <input type="text" class="form-control" id="dname" name="dname" placeholder="dname">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact Number</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="contact">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="specialization">Specialization</label>
      <select id="spec" name="spec" class="form-control">
        <option selected>Choose...</option>
        <option value="Cardiologist">Cardiologist</option>
				<option value="Audiologist"> Audiologist</option>
				<option value="Dentist">Dentist</option>
				<option value="ENT specialist">ENT specialist</option>
				<option value="Gynaecologist">Gynaecologist</option>
				<option value="Orthopaedic surgeon">Orthopaedic Surgeon</option>
				<option value="Paediatrician">Paediatrician</option>
				<option value="Psychiatrists">Psychiatrists</option>
      </select>
    </div> 
    <div class="form-group col-md-6">
      <label for="inputCity">Qualification</label>
      <input type="text" class="form-control" id="qual" name="qual" placeholder="qual">
    </div>
     
  </div>
    
    
    
   <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Studied From</label>
      <input type="text" class="form-control" id="studied" name="studied" placeholder="studied">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Work Experience</label>
      <input type="text" class="form-control" id="exp" name="exp" placeholder="exp">
    </div>
  </div>
  
  
  
  <div class="form-group">
    <label for="inputAddress">Hospital Name</label>
    <input type="text" class="form-control" id="hospital" name="hospital" placeholder="hospital">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="city">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="state" name="state" class="form-control">
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
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Email Address</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="email">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Website</label>
      <input type="text" class="form-control" id="website" name="website" placeholder="website">
    </div>
  </div>
  
			<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Upload Profile Pic</h5>
        <img src="pics/face.png" id="x" class="card-img-top" width="50" height="150" alt="...">
        <p class="card-text">Upload Your recent picture doctor.</p>
       <input type="file" onchange="showpreview(this);" required name="ppic" id="ppic" name="ppic">
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Upload Certificate</h5>
        <img src="pics/face.png" id="y" class="card-img-top" width="50" height="150" alt="...">
        <p class="card-text">Upload your Certificate</p>
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