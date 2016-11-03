<?php
namespace Model;

/**
* 
*/
class User
{
	
	public $id;
	public $name;
	public $aftername;
	public $email;
	private $password;
	public $genre;
	public $profileImage;
	public $birthdate;
	public $cash;
	public $dateLastLogin;


	function __construct(){}		
	

	function id ($id = null){
		if ( $id === null )
			return $this->id;

		$this->id = $id;		
	}

	function name ($name = null){
		if ( $name === null )
			return $this->name;

		$this->name = $name;		
	}

	function aftername ($aftername = null){
		if ( $aftername === null )
			return $this->aftername;

		$this->aftername = $aftername;		
	}	

	function email ($email = null){
		if ( $email === null )
			return $this->email;

		$this->email = $email;		
	}

	function password ($password = null){
		if ( $password === null )
			return $this->password;

		$this->password = $password;		
	}


	function genre ($genre = null){
		if ( $genre === null )
			return $this->genre;

		$this->genre = $genre;		
	}

	function profileImage ($profileImage = null){
		if ( $profileImage === null )
			return $this->profileImage;

		$this->profileImage = $profileImage;		
	}

	function birthdate ($birthdate = null){
		if ( $birthdate === null )
			return $this->birthdate;

		$this->birthdate = $birthdate;		
	}

	function cash ($cash = null){
		if ( $cash === null )
			return $this->cash;

		$this->cash = $cash;		
	}

	function dateLastLogin ($dateLastLogin = null){
		if ( $dateLastLogin === null )
			return $this->dateLastLogin;

		$this->dateLastLogin = $dateLastLogin;		
	}
}