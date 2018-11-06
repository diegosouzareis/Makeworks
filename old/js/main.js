var app = angular.module('ionicApp', ['ionic'])

app.controller('MainCtrl', function($scope, $ionicSideMenuDelegate) {
$scope.toggleRight = function(){
  $ionicSideMenuDelegate.toggleRight()
}
})