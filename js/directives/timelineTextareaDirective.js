angular.module("fit").directive("timelineTextarea", function ($filter) {
	return {
		require: "ngModel",
		link: function (scope, element, attrs, controller) {			

			var _wrap = function (len) {
				scope.timelineTextareaRow = Math.ceil(len / 60);
				console.log(element);						
			};

			element.bind("keyup", function (key) {
				_wrap(this.value.length);											
				
			});

			element.bind("paste", function (key) {	
				_wrap(this.value.length);
			});
			
		}
	};
});