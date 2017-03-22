<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.1/angular.min.js"></script>
<script type="text/javascript">
var app = angular.module('myApp', []);
app.controller("teste", function($scope, $http) {
    $http.get('backend.php').then(function(response) {
      $scope.data = response.data;
      console.log(response.data);
    });
});
</script>
</head>
<body>
<div ng-app="myApp" ng-controller="teste">
  <table border="1">
    <tr ng-repeat="x in data">
      <td>{{x.id}}</td>
      <td>{{x.nome}}</td>
    </tr>
  </table>
</div>
</body>
</html>