angular.module("fit").service("timelinePostsAPI", function ($http, config) {
	var _getPosts = function () {
		return $http.get(config.weburl + "/post/timelineService.php");
	};

	var _getLink = function(url){					
		return $http.get(config.weburl + "/post/timelineService.php/u="+url);
	}

	return {
		getPosts: _getPosts,
		getLink: _getLink		
	};


});