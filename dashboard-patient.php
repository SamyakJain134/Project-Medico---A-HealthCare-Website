<?php
session_start();
if(isset($_SESSION["activeuser"])==false)
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#BPRD").click(function() {
                $uid = $("#uid").val();
                $dateofrecord = $("#dateofrecord").val();
                $syst = $("#syst").val();
                $dia = $("#dia").val();
                $pulse = $("#pulse").val();
                $url = "record-bp-process.php?uid=" + $uid + "&dateofrecord=" + $dateofrecord + "&syst=" + $syst + "&dia=" + $dia + "&pulse=" + $pulse;
                $.get($url, function(res) {
                    alert(res);
                    $("input").val("");
                });

            });

            //=-=-=-=-=-=-=-=-=-=--

            $("#SugarRD").click(function() {
                $uidd = $("#uidd").val();
                $dateofrecordd = $("#dateofrecordd").val();
                $timeofrecord = $("#timeofrecord").val();
                $sugartime = $("#sugartime").val();
                $age = $("#age").val();
                $sugarresult = $("#sugarresult").val();
                $medintake = $("#medintake").val();
                $urineresult = $("#urineresult").val();
                $url = "record-sugar-process.php?uidd=" + $uidd + "&dateofrecordd=" + $dateofrecordd + "&timeofrecord=" + $timeofrecord + "&sugartime=" + $sugartime + "&age=" + $age + "&sugarresult=" + $sugarresult + "&medintake=" + $medintake + "&urineresult=" + $urineresult;
                $.get($url, function(res) {
                    alert(res);
                    $("input").val("");
                });

            });

            //=-=-=-=-=-=-=-=-=-

            $("#syst").change(function() {
                if ($(this).val() < 80)
                    $("#sy").html("Normal ").css("color", "green").css("text-shadow", "0px 5px 5px lightgreen");
                else
                if ($(this).val() >= 80 && $(this).val() < 89)
                    $("#sy").html("High BP(Stage 1)").css("color", "red").css("text-shadow", "0px 5px 5px white");
                else
                if ($(this).val() >= 100 && $(this).val() < 120)
                    $("#sy").html("High BP(Stage 2)").css("color", "red").css("text-shadow", "0px 5px 5px white");
                else
                if ($(this).val() >= 120)
                    $("#sy").html("Rush To Doctor").css("color", "red").css("text-shadow", "0px 5px 5px white");

            });

            //-=-=-=-=-=-=-=-=-=-

            $("#dia").change(function() {
                if ($(this).val() < 120)
                    $("#di").html("Normal").css("color", "green").css("text-shadow", "0px 5px 5px lightgreen");
                else
                if ($(this).val() >= 120 && $(this).val() < 129)
                    $("#di").html("Little High").css("color", "yellow").css("text-shadow", "0px 5px 5px red");
                else
                if ($(this).val() >= 130 && $(this).val() < 139)
                    $("#di").html("High BP(Stage 1)").css("color", "red").css("text-shadow", "0px 5px 5px white");
                else
                if ($(this).val() >= 140 && $(this).val() < 180)
                    $("#di").html("High BP(Stage 2)").css("color", "red").css("text-shadow", "0px 5px 5px white");
                else
                if ($(this).val() >= 180)
                    $("#di").html("Rush To Doctor").css("color", "red").css("text-shadow", "0px 5px 5px white");

            });


        });

    </script>
    <style>
        .ba {
            /* for all button*/
            /*background-image: url(pics/heartbeat.jpg);*/
            background-color: coral;
            background-size: contain;
        }


        body {
            background-image: url(img/dummy/bg1.jpg);
            background-attachment: fixed;
            background-size: cover;
        }

        .modalBP {
            background-color: azure;
            background-size: cover;
        }

        .clos {
            background-image: url(pics/not.png);
            background-size: 70%;
            background-repeat: no-repeat;
            width: 20px;

        }

        .modalSugar {
            background-color: azure;
            /* background-image: url(pics/nopic.png);*/
            background-size: cover;
        }

        .headd {
            color: darkblue;
        }

    </style>
</head>

<body>
    <center>
        <h1 class="headd">Patient Dashboard</h1>
       
       <h3 class="headd"> Welcome <?php echo $_SESSION["activeuser"];?> </h3>
    </center>
    <form class="container">

        <div class="form-row">
            <center>
                <div class="card float-left mt-5" style="width: 18rem; margin-left:130px;">
                    <img src="img/dummy/img-1.jpg" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <a href="patient-profile.php" class="btn btn-primary ba">PATIENT PROFILE</a>
                    </div>
                </div>
                <div class="card float-right mt-5" style="width: 18rem; margin-right:130px;">
                    <img src="img/dummy/img-3.png" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <a href="Doctor-slip-front.php" class="btn btn-primary ba">DOCTOR SLIP</a>
                    </div>
                </div>
                <div class="card float-left mt-5" style="width: 18rem; margin-left:130px;">
                    <img src="img/RegisterIcon2.png" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary ba" data-toggle="modal" data-target="#BPModal" data-whatever="@mdo">RECORD BP</button> </div>
                </div>
                <div class="card float-right mt-5" style="width: 18rem; margin-right:130px;">
                    <img src="img/slippppp.jpg" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary ba" data-toggle="modal" data-target="#sugarModal" data-whatever="@fat">RECORD SUGAR</button> </div>
                </div>
                <div class="card float-left mt-5" style="width: 18rem; margin-left:130px;">
                    <img src="img/serdoc.png" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <a href="manage-doctors.php" class="btn btn-primary ba">Manage Doctors</a>
                    </div>
                </div>
                 <div class="card float-right mt-5" style="width: 18rem; margin-right:130px;">
                    <img src="img/bp%20history.png" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <a href="history-bp.php" class="btn btn-primary ba">BP History</a>
                    </div>
                </div>
                <div class="card float-left mt-5" style="width: 18rem; margin-left:130px;">
                    <img src="img/sugarr.png" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <a href="history-sugar.php" class="btn btn-primary ba">Sugar History</a>
                    </div>
                </div>
                 <div class="card float-right mt-5" style="width: 18rem; margin-right:130px;">
                    <img src="pics/logout.png" width="200" height="200" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <a href="logout.php" class="btn btn-primary ba">Logout Session</a>
                    </div>
                </div>
            </center>



            <div class="modal fade" id="BPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modalBP">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">RECORD BP</h5>
                            <button type="button" class="close clos mt-1 bg-transparent" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <label for="uid">Uid</label>
                                        <input type="text" class="form-control" id="uid" placeholder="USER-ID">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label for="dateofrecord">Date Of Record</label>
                                        <input type="date" class="form-control" id="dateofrecord" placeholder="DATE OF RECORD">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label for="syst">Systolic</label>
                                        <input type="text" class="form-control" id="syst" placeholder="SYSTOLIC(high)">
                                        <span id="sy"></span>
                                    </div>
                                    <div class="col">
                                        <label for="dia">Diastolic</label>
                                        <input type="text" class="form-control" id="dia" placeholder="DIASTOLIC(low)">
                                        <span id="di"></span>
                                    </div>
                                </div>
                                <center>
                                    <div class="row mt-3" style="margin-left:170px;">
                                        <div class="col-md-5">
                                            <label for="pulse">Pulse</label>
                                            <input type="text" class="form-control" id="pulse" placeholder="PULSE">
                                            <span id="pulse"></span>
                                        </div>
                                    </div>
                                </center>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="BPRD" class="btn btn-outline-dark">RECORD DATA</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="sugarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content modalSugar">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">RECORD SUGAR</h5>
                            <button type="button" class="close clos mt-1" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">

                                    <div class="col">
                                        <label for="uid">Uid</label>
                                        <input type="text" class="form-control" id="uidd" placeholder="USER-ID">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label for="dateofrecord">Date Of Record</label>
                                        <input type="date" class="form-control" id="dateofrecordd" placeholder="DATE OF RECORD">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label for="tymofrecord">Time Of Record</label>
                                        <input type="time" id="timeofrecord" class="form-control">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <fieldset class="border border-dark p-4">
                                            <legend class="w-auto">Blood Sugar</legend>
                                            <div class="row">
                                                <div class="col-12">
                                                    <select id="sugartime" class="form-control" name="sugartime">
                                                        <option selected>Choose...</option>
                                                        <option>FASTING</option>
                                                        <option>BEFORE MEAL</option>
                                                        <option>AFTER MEAL</option>
                                                        <option>BEFORE EXERCISE</option>
                                                        <option>BEDTIME</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="age">Age</label>
                                                    <input type="number" class="form-control" id="age" placeholder="AGE">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label for="bgresult">Blood Glucose Level(result)</label>
                                                    <input type="number" class="form-control" id="sugarresult" placeholder="BLOOD SUGAR LEVEL">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <fieldset class="border border-dark p-4">
                                            <legend class="w-auto">Urine Sugar</legend>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="medin">Medicinal Intake</label>
                                                    <input type="text" class="form-control" id="medintake" placeholder="Medicinal Intake">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label for="result">Glucose in Urine(Result)</label>
                                                    <input type="text" class="form-control" id="urineresult" placeholder="Result">
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="SugarRD" class="btn btn-outline-info">RECORD DATA</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</body>

</html>
