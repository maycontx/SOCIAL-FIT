var storage = {
	putUser: function(user){
		if (typeof(Storage) !== "undefined") {
    		userStringfied = JSON.stringify(user);    		
    		localStorage.setItem("user", userStringfied);
		}
	},
	getUser: function(){
		if (typeof(Storage) !== "undefined") {			  		
    		return JSON.parse(localStorage.getItem("user"));    		 
		}
	}
}