<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var jE = false;
            var jP = false;
            var jM = false;
            var jEl = false;
            var jPl = false;

            $("#btnSignUp").click(function() {
                /* if (jE == false || jP == false || jM == false) {
                     alert("Fill the data");
                     return;
                 }*/
                var txtEmail = $("#txtEmail").val();
                var txtPwd = $("#txtPwd").val();
                var txtMob = $("#txtMob").val();
                if ($("#categoryP").prop("checked") == true) {
                    var category = $("#categoryP").val();
                }
                if ($("#categoryD").prop("checked") == true) {
                    var category = $("#categoryD").val();
                }

                var url = "signup-process.php?email=" + txtEmail + "&pwd=" + txtPwd + "&mob=" + txtMob + "&category=" + category;

                $.get(url, function(response) {
                    alert(response);
                });

            });

            //=-=-=-=-=--=----=--=

            $("#btnLogIn").click(function() {
                if (jEl == true && jPl == true) {
                    var emailL = $("#txtEmailL").val();
                    var pwdL = $("#txtPwdL").val();
                    var url = "login-process.php?emailL=" + emailL + "&pwdL=" + pwdL;
                    $.get(url, function(response) {
                        if (response == "unauthorised") {
                            $("#errLogin").removeClass("ok").addClass("not-ok");
                        } else {
                            location.href = "dashboard-patient.php";
                            // $("#errLogin").addClass("ok").removeClass("not-ok");
                        }
                    });
                } else
                    $("#errLogin").html("Error occured");
            });

            //=-=-=-=-=-=-=--=-=-

            $("#txtEmail").blur(function() {
                // alert();

                var email = $(this).val();

                if (email == "") {
                    $("#errEmail").html("Enter the email id");
                    $("#errEmail").removeClass("ok").addClass("not-ok");
                } else
                    var r = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
                var result = r.test(email);
                if (result == true) {
                    $("#errEmail").html("OKAY");
                    $("#errEmail").addClass("ok").removeClass("not-ok");
                } else {
                    $("#errEmail").html("Invalid");
                    $("#errEmail").removeClass("ok").addClass("not-ok");
                }
            });

            //=-=--=-=-=-=-=-=-=-=-=-

            $("#txtPwd").blur(function() {

                var pwd = $(this).val();

                if (pwd == "") {
                    $("#errPwd").html("Enter the password");
                    $("#errPwd").removeClass("ok").addClass("not-ok");
                } else
                    var r = /(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                var result = r.test(pwd);
                if (result == true) {
                    $("#errPwd").html("OKAY");
                    $("#errPwd").addClass("ok").removeClass("not-ok");
                } else {
                    $("#errPwd").html("NOt a strong password");
                    $("#errPwd").removeClass("ok").addClass("not-ok");
                }
            });

            //=-=--=-=-=-=-=-=-=-=-=-

            $("#txtMob").blur(function() {

                var mob = $(this).val();

                if (mob == "") {
                    $("#errMob").html("Enter the mobile no");
                    $("#errMob").removeClass("ok").addClass("not-ok");
                } else
                    var r = /^[6-9]{1}[0-9]{9}$/;
                var result = r.test(mob);
                if (result == true) {
                    $("#errMob").html("OKAY");
                    $("#errMob").addClass("ok").removeClass("not-ok");
                } else {
                    $("#errMob").html("INVALID");
                    $("#errMob").removeClass("ok").addClass("not-ok");
                }
            });

            //=-=-=-=-=-=-=--=-=-

            $("#txtEmailL").blur(function() {
                // alert();

                var emailL = $(this).val();

                if (emailL == "") {
                    $("#errEmailL").html("Enter the email id");
                    $("#errEmailL").removeClass("ok").addClass("not-ok");
                } else
                    jEl = true;
            });

            //=-=-=-=-=-=-=--=-=-

            $("#txtPwdL").blur(function() {
                // alert();

                var pwdL = $(this).val();

                if (pwdL == "") {
                    $("#errPwdL").html("Enter the password");
                    $("#errPwdL").removeClass("ok").addClass("not-ok");
                } else
                    jPl = true;
            });

        });

    </script>

    <style>
        .not-ok {
            width: 30px;
            height: 30px;
            background-image: url(pic/not.png);
            background-size: contain;
        }

        .ok {
            width: 30px;
            height: 30px;
            background-image: url(pic/ok.png);
            background-size: contain;
        }

        label {
            color: black;
            font-size: 18px;
            font-family: MS Outlook;
            font-weight: bolder;
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
        }

        #meet {

            width: 900px;
            height: 300px;
            display: inline-block;
            margin-left: 250px;
            background-color: white;
            color: black;
            margin-top: 20px;
            /*border: 1px gray solid;*/
        }

        #meet2 {
            color: black;
            background-color: darkorange;
            width: 250px;
            font-size: 22px;
            text-align: center;
            text-shadow: 1px 1px 2px white, 0 0 25px cornflowerblue, 0 0 5px aqua;
        }

        #developer,
        #sir {
            margin-top: 50px;
            text-align: center;
        }

        #info {
            /* border: 1px solid darkorange;*/
            margin-top: 50px;
            box-shadow: 10px 10px 5px grey;
        }

    </style>
</head>

<body>
    <div id="main">

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="pic/logo.png" width="100" height="100" class="d-inline-block align-top" alt="" loading="lazy">
                <font size="50"><b>MEDICARE</b></font>
            </a>
            \
            <form class="form-inline">
                <a class="nav-link" href="#" style="margin-left:6px;float:right;" data-toggle="modal" data-target="#Modal1">
                    <i class="fas fa-sign-in-alt"> SignUp</i></a>

                <a class="nav-link" href="#" style="margin-left:6px;float:right;" data-toggle="modal" data-target="#Modal2">
                    <i class="fas fa-key"> LogIn</i></a>

                <a class="nav-link" href="#" style="margin-left:6px;float:right;"><i class="fas fa-unlock-alt"> Forget Password</i></a>
            </form>
        </nav>

        <!--=-=-=-=-=-=--->

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="pic/cc1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="pic/cc2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="pic/cc3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--=-=-=-=-=-=--->

        <div class="row bg-info mt-5">
            <div class="col-md-12">
                <h2>
                    <center>OUR SERVICES</center>
                </h2>
            </div>
        </div>

        <!--=-=-=-=-=-=--->

        <div class="card mt-5" style="width: 18rem;margin-left: 100px; float:left">
            <img src="pic/1.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">SEARCH DOCTORS</h5>
                </center>
                <p class="card-text">You can search for doctors here as per your requirement.</p>
            </div>
        </div>
        <div class="card mt-5" style="width: 18rem;margin-left: 105px; float:left">
            <img src="pic/2.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">DOCTOR'S SLIP</h5>
                </center>
                <p class="card-text">You can keep a record of the doctor's slip by uploading it here.</p>
            </div>
        </div>
        <div class="card mt-5" style="width: 18rem; margin-left: 105px;float:left">
            <img src="pic/rec.png" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">BP HISTORY</h5>
                </center>
                <p class="card-text">You can keep a record of blood pressure whenever you test.</p>
            </div>
        </div>
        <div class="card mt-4" style="width: 18rem;margin-left: 100px; float:left">
            <img src="pic/c2.jpg" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">SUGAR HISTORY</h5>
                </center>
                <p class="card-text">You can keep a record of blood and urine sugar whenever you go for test.</p>
            </div>
        </div>
        <div class="card mt-4" style="width: 18rem;margin-left: 105px; float:left">
            <img src="pic/data.png" class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">SAFE & SECURE DATA</h5>
                </center>
                <p class="card-text">You can keep all your records and your data safely.</p>
            </div>
        </div>
        <div class="card mt-4" style="width: 18rem;margin-left: 105px;float:left">
            <img src="..." class="card-img-top" alt="..." width="200" height="200">
            <div class="card-body">
                <center>
                    <h5 class="card-title ttl">Card title</h5>
                </center>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <!--=-=-=-=-=-=--->

        <div id="meet">
            <div id="meet2"><b>MEET THE DEVELOPER</b></div>
            <div class="row">
                <div class="col" id="developer">
                    <img src="pic/agent.jpg" alt="..." height="200" width="200">
                </div>
                <div class="col-5" id="info">
                    I am <b>Isha Garg</b> currently pursuing degree of B.Sc in computer science.This is my first project made under the guidance of <b>Mr.Rajesh Kumar Bansal</b> who is the Author of <b>"Real Java"</b>(Available on AMAZON),training head at <u>Sun-Soft Technologies</u> and founder of Bangalore Computer Education with 19 Years of experience.
                </div>
                <div class="col" id="sir">
                    <img src="pic/agent.jpg" alt="..." height="200" width="200">
                </div>
            </div>
        </div>

        <!--=-=-=-=-=-=--->

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

        <!-- <nav class="navbar navbar-light bg-light">
            <form class="form-inline">

                <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#Modal1">SignUp</button>
                <button class="btn btn-outline-secondary" type="button" style="margin-left:20px;" data-toggle="modal" data-target="#Modal2">LogIn</button>
                <button class="btn btn-link" type="button" style="margin-left:20px;">Forget Password</button>
            </form>
        </nav>-->
    </div>

    <!--=-=-=-=-=-=--->

    <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLabel">SignUp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" id="txtEmail" name="txtEmail2" aria-describedby="emailHelp">
                            <span id="errEmail">We'll never share your email with anyone else.</span>
                        </div>
                        <!-- <div id="errEmail">We'll never share your email with anyone else.</div>-->
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="txtPwd" name="txtPwd2">
                            <span id="errPwd">*</span>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile</label>
                            <input type="text" class="form-control" id="txtMob" name="txtMob2">
                            <span id="errMob">*</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rad" value="Doctor" id="categoryP" checked>
                            <label class="form-check-label" for="">
                                Doctor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rad" value="Patient" id="categoryD">
                            <label class="form-check-label" for="">
                                Patient
                            </label>
                        </div>
                        <div class="form-group">
                            <center>
                                <button type="button" class="btn btn-primary" id="btnSignUp">SignUp</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=-=-=-=-=-=--->

    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="exampleModalLabel">LogIn Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="txtEmailL">
                            <span id="errEmailL">*</span>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="txtPwdL">
                            <span id="errPwdL">*</span>
                        </div>
                        <!--<div class="form-group">
                            <center>
                                <button type="button" class="btn btn-link" style="margin-left:20px;">Forget Password</button>
                            </center>
                        </div>-->
                        <div class="form-group">
                            <center>
                                <button type="button" class="btn btn-primary" id="btnLogIn">LogIn</button>
                                <span id="errLogin">*</span>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
