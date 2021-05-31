<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src='js/jquery-1.8.2.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/angular.min.js"></script>
    <script>
        var varModule = angular.module("mymod", []);
        varModule.controller("mycontroller", function($scope, $http) {


            $scope.jsonArray;
            $scope.jsonArray2;
            $scope.selObject;
            $scope.jsonArraySelected;

            $scope.doFetch = function() {

                $http.get("doctor-cities-process.php").then(okFx, notOkFx);

                function okFx(response) {
                    //alert(JSON.stringify(response.data));
                    $scope.jsonArray = response.data;
                    $scope.selObject = $scope.jsonArray[1];
                    
                }

                function notOkFx(response) {
                    alert(response.data);
                }
            }
            $scope.doFetch2 = function() {

                $http.get("doctor-all-process.php?city=" +$scope.selObject.city).then(okFx, notOkFx);

                function okFx(response) {
                    alert(JSON.stringify(response.data));
                    $scope.jsonArray2 = response.data;
                                      
                }

                function notOkFx(response) {
                    alert(response.data);
                }
            }
        });

       /* function dowork(tsk) {
            if (tsk == 1) {
                document.getElementById("1").hidden = false;
                document.getElementById("2").hidden = true;
                document.getElementById("3").hidden = true;
            } else
            if (tsk == 2) {
                document.getElementById("1").hidden = true;
                document.getElementById("2").hidden = false;
                document.getElementById("3").hidden = true;
            } else
            if (tsk == 3) {
                document.getElementById("1").hidden = true;
                document.getElementById("2").hidden = true;
                document.getElementById("3").hidden = false;
            }
        }*/

    </script>

    <style>
        body {
            background-attachment: fixed;
            /*background-image: url(pics/banner-05.jpg);*/
            background-color: antiquewhite;
            background-size: cover;
        }

    </style>

<body ng-app="mymod" ng-controller="mycontroller" ng-init="doFetch();">
    <form class="container">
        <center>
            <!-- Just an image -->
            <nav class="navbar navbar-light bg-transparent fixed-top container">
                <a class="navbar-brand" href="#">
                    <img src="pics/agent.jpg" class="img-fluid" width="50" height="50" alt="" loading="lazy">
                    <!--<img class="mt-3 img-fluid" width="130" src="pics/">-->
                </a>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent " style="margin-top:100px;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="form-inline">
                       SEARCH CITY:
                        <select class="col-md-3 btn border-dark" ng-model="google.city">
                            <option ng-repeat="obj in jsonArray">{{obj.city}}</option>
                        </select>
                        <input type="button" class="ml-2 btn btn-outline-dark" ng-click="doFetch2();" value="FIND IN DATABASE">
                    </form>
                </div>
            </nav>
            <div class="card float-left mt-3 bg-transparent" style="width: 18rem;" ng-repeat="obj in jsonArray2|filter:search|filter:google">
                <img src="uploads/{{obj.ppic}}" height=200 class="card-img-top" alt="...">
                <div class="card-body bg-transparent">
                    <h5 class="card-title">{{obj.uid}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent">{{obj.dname}}</li>
                    <li class="list-group-item bg-transparent">{{obj.spl}}</li>
                    <li class="list-group-item bg-transparent">{{obj.contact}}</li>
                    <li class="list-group-item bg-transparent">{{obj.email}}</li>
                    <li class="list-group-item bg-transparent">{{obj.city}}</li>
                </ul>
            </div>


        </center>
    </form>
</body>
</head>

</html>
