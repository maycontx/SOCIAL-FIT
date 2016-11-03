<?php
namespace DataAccess;

use Factory\Connection as Connector;
use Model\Post;
use DataAccess\UserDataAccess as UserData;

use PDO;

require_once '../../data/factory/connection.php';
require_once '../../data/models/post.php';
require_once '../../data/data-access/UserDataAccess.php';

class PostDataAccess
{
	
	private $connector;
	private $connection;

	function __construct()
	{
		$this->connector = new Connector;
		$this->connection = $this->connector->connect();
	}
	
	function getPosts(){
		
		$stmt = $this->connection->prepare('SELECT * FROM post');		
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$posts = [];
		
		while($post = array_shift($result)){   			
   			$dao = new UserData;
    		$user = $dao->getUser($post["user"]);
    		$post["user"] = $user[0];
   			
   			$posts[] = $post;
		}
		
		return $posts;

	}

}