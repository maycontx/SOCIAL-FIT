angular.module("fit").controller("timelineController", function($scope, $location, posts, timelinePostsAPI){	
	if ( storage.getUser() === null ){		
		$location.path("/");
	}else{
		$scope.user = storage.getUser();
		$scope.timelineTextareaRow = 2;		
		$scope.timelinePosts = posts.data;
	}	

	$scope.find = function(){
		var linkUrl = $scope.linkUrl;

		var a = linkUrl;
		var res = a.replace(/http:\/\/|https:\/\//, "");	
		var res = res.replace(/\//g, "bbb");

		console.log(res)	;	

		console.log(timelinePostsAPI.getLink(res));
	}

	
});