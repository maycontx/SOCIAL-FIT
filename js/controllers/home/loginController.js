angular.module("fit").controller("loginController", function($scope, $location, loginAPI, $rootScope){

	$scope.doLogin = function () {
		var email = $scope.email;
		var password = $scope.password;

		if ( email === "" || password === "" ){
			$scope.loginErrorMessage = "Preencha os campos."
		}else{
			loginAPI.doLogin(email, password).success(function (data) {
				if ( data === "null" ){
					$scope.loginErrorMessage = "Usuário ou senha incorretos."
				}else{
					$scope.loginErrorMessage = false;									
					storage.putUser(data);					
					$location.path("/timeline");		
				}
				
			}).error(function (data, status) {
				$scope.loginErrorMessage = "Erro em nosso servidor, tente novamente."
			});
		}		
	};

});