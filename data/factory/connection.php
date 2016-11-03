<?php
namespace Factory;

use PDO;

(!defined("DATABASE" ? define("DATABASE", "fit") : null));
(!defined("SERVER" ? define("SERVER", "localhost") : null));
(!defined("USER" ? define("USER", "root") : null));
(!defined("PASSWORD" ? define("PASSWORD", "123456") : null));

class Connection{

	function connect(){
		try {  
		    
		    $DBH = new PDO("mysql:host=".SERVER.";dbname=".DATABASE.";charset=utf8", USER, PASSWORD); 
		    return $DBH;

		}catch(PDOException $e) { 

		    echo 'ERROR: ' . $e->getMessage();
		
		}   
	}
	
}



