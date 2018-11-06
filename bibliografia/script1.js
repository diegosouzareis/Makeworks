 angular.module('myApp', ['ionic'])

.factory('AuthService', function($rootScope) {

  var loggedIn=false;

  return {

    checkLogin : function() {
      $rootScope.$broadcast('loggedIn', { 'loggedIn' : loggedIn });
      return loggedIn;

    },
    
    login : function() {
      loggedIn = true;
      $rootScope.$broadcast('loggedIn', { 'loggedIn' : loggedIn });
    }  

  }

})

.controller('MyCtrl', function($scope, $ionicModal, $timeout, AuthService) {
  $scope.myTitle = 'Template';

  // Load the modal from the given template URL
  $ionicModal.fromTemplateUrl('modal.html', function($ionicModal) {
    $scope.modal = $ionicModal;
  }, {
    // Use our scope for the scope of the modal to keep it simple
    scope: $scope,
    // The animation we want to use for the modal entrance
  });

  
  $scope.openModal = function() {
    console.log('Opening Modal');
    $scope.modal.show();
  };

  $scope.$on('loggedIn', function(event,message) {
    
    if(message.loggedIn === true) {
      console.log('LOGGED IN!');
      $scope.modal.hide();
    } 
  });

  $scope.fakeLogin = function(){
    AuthService.login();
  }

  $timeout( function() {
    AuthService.checkLogin();
  }, 500);

  
  
});
