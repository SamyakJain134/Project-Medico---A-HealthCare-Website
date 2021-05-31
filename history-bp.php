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
        varModule.controller("mycontroller", function($scope, $http , $filter) {


            $scope.jsonArray;
            $scope.jsonArraySelected;

            $scope.doFetchAll = function() {
                /*$uidd=$("#uidd").val();
                var datef=$filter('date')( $scope.datef,"yyyy-MM-dd");
                var datet=$filter('date')($scope.datet,"yyyy-MM-dd");*/
                $uidd=$("#uidd").val();
                $datef=$("#datef").val();
                $datet=$("#datet").val();

                $http.get("history-bp-process.php?uidd="+$uidd+"&datef="+$datef+"&datet="+$datet.then(okFx, notOkFx);

                function okFx(response) {
                    //alert(JSON.stringify(response.data));
                    $scope.jsonArray = response.data;
                    $scope.selObject = $scope.jsonArray[1];
                }

                function notOkFx(response) {
                    alert(response.data);
                }
            }
            /*$scope.doFetch = function() {
                

                $http.get("history-bp-process1.php").then(okFx, notOkFx);

                function okFx(response) {
                    //alert(JSON.stringify(response.data));
                    $scope.jsonArray = response.data;
                    $scope.selObject = $scope.jsonArray[1];
                }

                function notOkFx(response) {
                    alert(response.data);
                }
            }*/


        });

    </script>

    <style>
        body {
            background-attachment: fixed;
            background-color: beige;
            background-size: cover;
        }

    </style>

<body ng-app="mymod" ng-controller="mycontroller" ng-init="doFetch();">
    <form class="container">
        <center>
        <blockquote class="blockquote text-center">
  <p class="mb-0">Previous Blood Pressure Records</p>
  <footer class="blockquote-footer">History <cite title="Source Title">BP</cite></footer>
</blockquote>
            <!--<img class="mt-3 img-fluid text-center" width="500" src="pics/usa.png">-->
            <br>
                   <h5 class="float-left mt-4">
                    USER-ID:</h5>
                    <input class="form-control float-left mt-3 mr-sm-2 col-md-2 mt-1" type="search" id="uidd" placeholder="USER-ID" aria-label="Search" ng-model="search.uid">
                    <h5 class="float-left mt-4">
                     DATE FROM:</h5>
                   
                    <input class="form-control float-left mt-3 mr-sm-2 col-md-2 mt-1" id="datef" type="DATE" placeholder="DATE FROM" aria-label="Search">
                    <h5 class="float-left mt-4">
                     DATE TO:</h5>
                    <input class="form-control float-left mt-3 mr-sm-2 col-md-2 mt-1" id="datet" type="DATE" placeholder="DATE TO" aria-label="Search">
                    <input class="form-control mr-sm-2 mt-3 col-md-2 mt-1 btn btn-outline-info" value="FETCH" ng-click="doFetchAll();" type="button"  aria-label="Search">
                    

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr class=" text-center">
                        <th scope="col" hidden>UID</th>
                        <th scope="col">DATE</th>
                        <!--<th scope="col">TIME</th>-->
                        <th scope="col">HIGH</th>
                        <th scope="col">LOW</th>
                        <th scope="col">PULSE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" text-center" ng-repeat="obj in jsonArray">
                        <th scope="row" hidden>{{obj.uid}}</th>
                        <td>{{obj.dateofrecord}}</td>
                        <!--<td>{{obj.time}}</td>-->
                        <td>{{obj.syst}}</td>
                        <td>{{obj.dia}}</td>
                        <td>{{obj.pulse}}</td>
                    </tr>
                </tbody>
            </table>
        </center>
    </form>
</body>
</head>

</html>
