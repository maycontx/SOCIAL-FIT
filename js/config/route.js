angular.module("fit").config(function($routeProvider){
	$routeProvider.when("/", {
		templateUrl: "views/home/home.html",
		controller: "homeController"
	}),
	$routeProvider.when("/timeline", {
		templateUrl: "views/fit-main/timeline.html",
		controller: "timelineController",
		resolve: {			
			posts: function (timelinePostsAPI) {
				return timelinePostsAPI.getPosts();
			}
		}
	}),
	$routeProvider.otherwise({
		redirectTo: "/"
	})
});