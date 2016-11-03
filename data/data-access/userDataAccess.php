<?php
namespace DataAccess;

require_once '../../data/factory/connection.php';
require_once '../../data/models/user.php';

use Factory\Connection as Connector;
use Model\User;

use PDO;

class UserDataAccess
{
	
	private $connector;
	private $connection;

	function __construct()
	{
		$this->connector = new Connector;
		$this->connection = $this->connector->connect();
	}
	
	function login($email, $password){
		
		$stmt = $this->connection->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->bindValue(':password', $password, PDO::PARAM_STR);
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if ( count($result) > 0 ) return $result;
		
		return null;

	}

	function getUser($id){
		$stmt = $this->connection->prepare('SELECT * FROM user WHERE id = :id');
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);		
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if ( count($result) > 0 ) return $result;
		
		return null;
	}

}