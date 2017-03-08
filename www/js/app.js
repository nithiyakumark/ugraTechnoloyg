
var app = angular.module('myApp', ['onsen']);

//ons.bootstrap();



    app.controller('staticCtrl', function($scope, $http) {
      $http.get("php_file/json.php").then(function (response) {
      $scope.staticData = response.data;
            });
    });
    
     app.controller('dynamicCtrl', function($scope, $http) {
      $http.get("php_file/getDynamic.php").then(function (response) {
      $scope.dynamicData = response.data;
            });
    });
         
     app.controller('responsiveCtrl', function($scope, $http) {
      $http.get("php_file/getResponsive.php").then(function (response) {
      $scope.responsiveData = response.data;
            });
    });
         
      app.controller('androidCtrl', function($scope, $http) {
      $http.get("php_file/getApp.php").then(function (response) {
      $scope.androidData = response.data;
            });
    });    

     app.controller('softwareCtrl', function($scope, $http) {
      $http.get("php_file/getSoftware.php").then(function (response) {
      $scope.softwareData = response.data;
            });
    });    


