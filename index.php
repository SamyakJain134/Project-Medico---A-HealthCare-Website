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
         txtUid=false;
         txtPwd=false;
         txtMob=false;
         
		 $("#Signupp").click(function(){
             if(txtUid==false||txtPwd==false||txtMob==false)
             {
               alert("Fill Values");  
             }
			 else
             {
             var txtUid=$("#txtUid").val();
			 var txtPwd=$("#txtPwd").val();
             var txtMob=$("#txtMob").val();
                 if ($("#doctor").prop("checked")==true)
                 $cgy='doctor';
                 else
                if($("#patient").prop("checked")==true)
                $cgy='patient';
			 var url="index-signup-process.php?email="+ txtUid+"&pwd="+ txtPwd+"&mob="+ txtMob+"&cgy="+ $cgy;
			 
			 $.get(url,function(response)
				   {
				 	alert(response);
			 		});   
             }
			 

		 });
         $("#txtUid").blur(function(){
            var uid=$(this).val();
            if(uid=="")
            {
                $("#erruid").html("Fill Email Id First");    
            }
            else
            {
                var r=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
                var result=r.test(uid);
            
            if(result==true)
            {
                $("#erruid").html("HMM OKK");
            }
            else
            {
                $("#erruid").html("INValid~!!! "); 
            }
            }
        });
         $("#txtPwd").blur(function(){
            var pwd=$(this).val();
            if(pwd=="")
            {
                $("#errpwd").html("Fill Password First");    
            }
            else
            {
                var r=/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                var result=r.test(pwd);
            
            if(result==true)
            {
                $("#errpwd").html("HMM OKK");
            }
            else
            {
                $("#errpwd").html("Password Must Contain: 1 lower,uppercase letter,1 Numeric Character and special characer"); 
            }
            }
        });
         $("#txtMob").blur(function(){
			var r=/^[6-9]{1}[0-9]{9}$/;//reg. expression
			var number=$("#txtMob").val();
			var result=r.test(number);
			if(result==true)
				$("#errmob").html("Valid");
			else
				$("#errmob").html("Invalid");

		});
		
         
         $("#Signuppp").click(function(){
             /*if(txtUid==false||txtPwd==false)
             {
               alert("Fill Values");  
             }
			 else
             {*/
             var txtUid=$("#txtUid2").val();
			 var txtPwd=$("#txtPwd2").val();
			 
                $.get("index-login-process.php?email="+ txtUid+"&pwd="+ txtPwd ,function(response){
                    if(response=="Unauthorized")
                        $("#errloginn").html(response);
                     else
                         {
                             /*$("#errloginn").html("Authorized");
                             alert(response);
                         */
                             location.href="dashboard-patient.php";
                         }
                 })
                
			 
			 /*$.get(url,function(response)
				   {
				 	alert(response);
			 		}); */  
            /* }*/
			 

		 });
         $("#forgotpass").click(function(){
             
             var uid=$("#uid").val();
			 
                 
			 var url="forgot-password.php?uid="+uid;
			 
			 $.get(url,function(response)
				   {
				 	alert(response);
			 		}); 

		 });
         
		
	 });
       
       
	
	</script>
    <title>Project</title>
    <style>
        body{
            background-image: url(img/dummy/bg1.jpg);
        }
        .labell
        {
            /*text-emphasis-color: black;*/
        }
        .clrrr
        {
            color: black;
            font-weight: bold;
            font-family: cursive;
        }
        span {
            background-repeat: no-repeat;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            text-align: center;
        }

        .ttl {
            font-weight: bold;
            font-family: cursive;
        }

        .meet {

            width: 900px;
            height: 300px;
            display: inline-block;
            margin-left: 250px;
            background-color: white;
            color: black;
            margin-top: 20px;
            /*border: 1px gray solid;*/
        }

        .meet2 {
            color: black;
            background-color: darkorange;
            width: 250px;
            font-size: 22px;
            text-align: center;
            text-shadow: 1px 1px 2px white, 0 0 25px cornflowerblue, 0 0 5px aqua;
        }

        .developer,
        .sir {
            margin-top: 50px;
            text-align: center;
        }

        #info {
            /* border: 1px solid darkorange;*/
            margin-top: 50px;
            box-shadow: 10px 10px 5px grey;
        }
        #map {
               width: 100%;
               height: 400px;
               background-color: grey;
        }
    </style>
<!--
    <style>
	
		#processing{
			background-image: url(pics/wait2.gif);
			width: 120px; height: 120px;
			border:1px gray solid;
			background-size: contain;
			position: absolute;
			margin-left: 40%;
			margin-top: 10%;
			z-index: 10;
			display: none;
		}
		#andhera{
			width: 100%; height: 100%; background-color: darkgray; opacity: .5;
			position: absolute; z-index: 10;
			display: none;
		}
	</style>
-->

</head>
<body>
<!--
 <div id="andhera"></div>
    <div id="processing"></div>
-->
  <nav class="navbar navbar-dark navbar-fixed-top" style="background-color:green;">
  <div class="container">
      <div class="row ">
          <div class="col-sm-6 col-md-6 align-content-start">
              <p class="font-weight-bold ">Monday to Saturday 10am-6pm</p>
          </div>
          <div class="col-sm-6 col-md-6 align-content-end">
              <p class="font-weight-bold">918558071853</p>
          </div>
      </div>
  </div>
  <!-- Navbar content -->
</nav>
<!--<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="pics/face.png" width="100" height="100" class="d-inline-block align-top" alt="" loading="lazy">
                <font size="3"><b>MEDICARE</b></font>
            </a>
            <form class="form-inline">
                <a class="nav-link" href="#" style="margin-left:6px;float:right;" data-toggle="modal" data-target="#Modal1">
                    <i class="fas fa-sign-in-alt"> SignUp</i></a>

                <a class="nav-link" href="#" style="margin-left:6px;float:right;" data-toggle="modal" data-target="#Modal2">
                    <i class="fas fa-key"> LogIn</i></a>

                <a class="nav-link" href="#" style="margin-left:6px;float:right;"><i class="fas fa-unlock-alt"> Forget Password</i></a>
            </form>
        </nav>-->

<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="index.php"><img src="img/logo.png" width="200" height="40" class="d-inline-block align-top" alt="" loading="lazy" pointer></a>
  

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
    <form class="form-inline my-2 my-lg-0">
     <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#"  style="margin-left:6px;float:right" data-toggle="modal" data-target="#Modal">Sign-up<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal"  style="margin-left:6px;float:right" data-target="#Modal2">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="forgot-password.php" data-toggle="modal" data-target="#Modal3" >Forgot Password<span class="sr-only">(current)</span></a>
      </li>
    </ul>
      
    </form>
  </div>
</nav>
<!--------------------------------------------->

 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/max1.jpg" class="d-block w-100" alt="..." width="1083" height="567">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="clrrr">While the world is paused</h5>
        <p class="clrrr">Your Treatment should not stop</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pics/max2.jpg" class="d-block w-100" alt="..." width="1083" height="567">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="clrrr">One Step</h5>
        <p class="clrrr">For all your Problems</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pics/max3.jpg" class="d-block w-100" alt="..." width="1083" height="567">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="clrrr">Heart Attack is immediate emergency and needs immediate action</h5>
        <p class="clrrr">Do Not ignore syntoms and rush to nearest Doctor !</p>
      </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!--<button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#Modal">Signup</button>
    <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#Modal2">Login</button>-->

 <!--<section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Medical Camp</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Best Healthcare for You</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Store Your Records</strong></span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite Doctor</strong></span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Get Priority Consultation</strong></span></li>
						</ul>
						<p class="text-right wow bounceIn" data-wow-delay="0.4s">
						
						</p>
						</div>
						</div>


					</div>
					<div class="col-lg-6">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<img src="img/dummy/img-1.png" class="img-responsive" alt="" />
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>-->

    <div class="row bg-info mt-5">
            <div class="col-md-12">
                <h2>
                    <center>OUR SERVICES</center>
                </h2>
            </div>
        </div>
        
        <div class="card mt-5" style="width: 18rem;margin-left: 100px; float:left">
            <img src="pics/doctors.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">SEARCH DOCTORS</h5>
                </center>
                <p class="card-text">You can search for doctors here as per your requirement.</p>
            </div>
        </div>
        <div class="card mt-5" style="width: 18rem;margin-left: 105px; float:left">
            <img src="pics/doctors1.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">DOCTOR'S SLIP</h5>
                </center>
                <p class="card-text">You can keep a record of the doctor's slip by uploading it here.</p>
            </div>
        </div>
        <div class="card mt-5" style="width: 18rem; margin-left: 105px;float:left">
            <img src="pics/recordbp.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">BP HISTORY</h5>
                </center>
                <p class="card-text">You can keep a record of blood pressure whenever you test.</p>
            </div>
        </div>
        <div class="card mt-4" style="width: 18rem;margin-left: 100px; float:left">
            <img src="pics/sugarrecord.png" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">SUGAR HISTORY</h5>
                </center>
                <p class="card-text">You can keep a record of blood and urine sugar whenever you go for test.</p>
            </div>
        </div>
        <div class="card mt-4" style="width: 18rem;margin-left: 105px; float:left">
            <img src="pics/safe.png" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">SAFE & SECURE DATA</h5>
                </center>
                <p class="card-text">You can keep all your records and your data safely.</p>
            </div>
        </div>
        <div class="card mt-4" style="width: 18rem;margin-left: 105px;float:left">
            <img src="pics/aarogya" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl"><b>Digital Service</b></h5>
                </center>
                <p class="card-text">Indian open-source CoVID-19 "Contact tracing, Syndromic mapping and Self-assessment" digital service, primarily a mobile App</p>
            </div>
        </div>

        <!--=-=-=-=-=-=--->

        <div class="meet">
            <div class="meet2"><b>MEET THE DEVELOPER</b></div>
            <div class="row">
                <div class="col" class="developer">
                    <img src="pics/IMG_0002.jpg" alt="..." height="200" width="200">
                </div>
                <div class="col-5" id="info">
                    I am <b>Samyak Jain</b> currently pursuing degree of Btech in Computer Science.This is my first project made under the guidance of <b>Mr.Rajesh Kumar Bansal</b> who is the Author of <b>"Real Java"</b>(Available on AMAZON),training head at <u>Sun-Soft Technologies</u> and founder of Bangalore Computer Education with 19 Years of experience.
                </div>
                <div class="col" class="sir">
                    <img src="pics/sir.jpg" alt="..." height="200" width="200">
                </div>
            </div>
        </div>

        <!--=-=-=-=-=-=--->
        <div class="container">
             <div class="row mt-5 bg-transparent">

              <div class="col-md-12">
                  <div class="font-weight-bold text-center text-lg-center display-4 bg-info">Reach Us</div>
              </div>
               <div class="container-fluid">
              <div class="row mt-5">
                 
                  <div class="col-md-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13791.522932618522!2d74.9523281!3d30.2119513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a0d6293513f98ce!2sBanglore%20Computer%20Education%20(C%20C%2B%2B%20Android%20J2EE%20PHP%20Python%20AngularJs%20Spring%20Java%20Training%20Institute)!5e0!3m2!1sen!2sin!4v1595765749959!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
                  <div class="offset-3 col-md-4" style="margin-left:300px;">
                     <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBanglore-Computer-Education-104703204674437%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=400&height=400&small_header=true&adapt_container_width=false&hide_cover=true&show_facepile=false&appId" width="500" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                  </div>
              </div>

          </div>

          </div>
          </div>
           

        <div id="parent" style="background-color: black">
            <div class="col-3">
                <table width="100%" border="0">
                    <tr height="40">
                        <td>
                            <font color="white">
                                <h2>Useful links</h2>
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="col-3">2</div>
            <div class="col-3">3</div>
            <div class="col-3">4</div>
        </div>
        <!--Login Signup button-->  
   <!-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Modal">
  Signup
</button>
<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Modal2">
  Login
</button>-->


<!-- SIGNUP -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign-Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1" class="labell">Email address</label>
    <input type="email" class="form-control" id="txtUid" aria-describedby="emailHelp" placeholder="txtUid" name="txtUid">
    <span id="erruid" class="form-text text-muted">We'll never share your email with anyone else.</span>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="txtPwd" placeholder="txtPwd"  aria-describedby="pwdHelp"
>
    <span id="errpwd" class="form-text text-muted">Please Enter your correct Password</span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" id="txtMob" placeholder="txtMob">
    <span id="errmob" class="form-text text-muted">Enter Your Mobile Number</span>
  </div>
  <center>
      <input type="radio" id="patient" name=s>Patient
  <input type="radio" id="doctor" name=s>Doctor
  </center>
  <br>
  <center><button type="button" class="btn btn-primary" id="Signupp">Submit</button></center>
</form>
      </div>
    </div>
  </div>
</div>  
<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="txtUid2" aria-describedby="emailHelp" placeholder="txtUid2" name="txtUid">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="txtPwd2" placeholder="txtPwd2" name="txtPwd2">
  </div>
  
  <button type="button" class="btn btn-primary" id="Signuppp">Login</button>
  <span id="errloginn" class="form-text text-muted">Enter valid Details</span>
</form>
      </div>
    </div>
  </div>
</div>
 <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">User ID</label>
    <input type="text" class="form-control" id="uid" aria-describedby="emailHelp" placeholder="uid" name="uid">
  </div>
  <button type="button" class="btn btn-primary" id="forgotpass">Get Password</button>
</form>
      </div>
    </div>
  </div>
</div>
  
</body>
</html>