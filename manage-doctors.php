<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/jquery-1.8.2.min.js"></script>


	<script src="js/bootstrap.min.js"></script>


	<script src="js/angular.min.js"></script>
    <script>
        $module = angular.module("mymodule", []);
        $module.controller("mycontroller", function($scope,$http) {
			$scope.jsonArray;
			
			$scope.doFetchAll=function()
			{
				//sending JSON request
				$http.get("doctor-fetch-all.php").then(okFx,notOk);
				function okFx(response)
				{
				$scope.jsonArray=response.data;

					//alert(JSON.stringify(response.data));//data==jsonArray
				}
				function notOk(response)
				{
					alert(response.data);
				}
			}

			$scope.doDelete = function(uid) {
				$http.get("doctor-delete.php?uid="+uid).then(okFx,notOk);
				function okFx(response)
				{
					alert(response.data);
					$scope.doFetchAll();

					//alert(JSON.stringify(response.data));//data==jsonArray
				}
				function notOk(response)
				{
					alert(response.data);
				}
			}

			$scope.doSort = function(colm) {
				$scope.column = colm;
			}
		});
    
    
    
    
    
    
    
    </script>
    <title>Manage Doctor</title>
</head>
<body ng-app="mymodule" ng-controller="mycontroller">
	<center>
	<div class="btn btn-success" ng-click="doFetchAll();">Fetch All Doctors</div>
	
		
		<p>
			Search For Doctor: <input type="text" ng-model="googler.uid">
		</p>
		<table width="600" border="1" rules="all" class="table">
		<thead class="thead-dark">
			<tr>
				<th>Sr. No.</th>
				<th ng-click="doSort('uid');">User id</th>
				<th ng-click="doSort('dname');">Doctor Name</th>
				<th ng-click="doSort('contact');">Mobile Number</th>
				<th ng-click="doSort('spec');">Specialization</th>
				<th ng-click="doSort('qual');">Qualification</th>
				<th ng-click="doSort('studied');">Studied from</th>
                <th ng-click="doSort('exp');">Experience</th>
				<th ng-click="doSort('hospital');">Hospital Name</th>
				<th ng-click="doSort('address');">Address</th>
				<th ng-click="doSort('city');">City</th>
                <th ng-click="doSort('state');">State</th>
				<th ng-click="doSort('email');">Email</th>
				<th ng-click="doSort('website');">Website</th>
				<th>Operations</th>
			</tr>
			</thead>
			<tr ng-repeat="obj in jsonArray |orderBy:column | filter:googler">
				<td scope="row">{{$index+1}}</td>
				<td>{{obj.uid}} </td>
				<td>{{obj.dname}} </td>
				<td>{{obj.contact}} </td>
				<td>{{obj.spec}} </td>
				<td>{{obj.qual}} </td>
				<td>{{obj.studied}} </td>
                <td>{{obj.exp}} </td>
				<td>{{obj.hospital}} </td>
				<td>{{obj.address}} </td>
				<td>{{obj.city}} </td>
				<td>{{obj.state}} </td>
				<td>{{obj.email}} </td>
				<td>{{obj.website}} </td>
				<td align="center"><input type="button" value="Delete" ng-click="doDelete(obj.uid);"> </td>

			</tr>
		</table>
	</center>
	<div class="container">
		<div class="row">
			<div class="col-md-3 mt-3" ng-repeat="obj in jsonArray |orderBy:column | filter:googler" >
				<div class="card" >
					<img src="uploads/{{obj.ppic}}" height="100"  class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">User id:{{obj.uid}}</h5>
						<p class="card-text">Doctor Name: {{obj.dname}}</p>
						<p class="card-text">Specialization: {{obj.spec}}</p>
						<a href="#" class="btn btn-primary" ng-click="doDelete(obj.uid);">Delete</a>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>