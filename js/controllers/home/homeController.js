angular.module("fit").controller("homeController", function($scope, $location){
	if ( storage.getUser() !== null ){
		$location.path("/timeline");
	}

	$scope.loginCall = function(){
		return $scope.loginform = !$scope.loginform;
	}
});