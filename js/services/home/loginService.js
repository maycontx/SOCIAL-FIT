angular.module("fit").factory("loginAPI", function ($http, config) {
	var _doLogin = function (e, p) {
		return $http.get(config.weburl + "/user/loginService.php/a="+e+"&b="+p);
	};

	return {
		doLogin: _doLogin		
	};
});