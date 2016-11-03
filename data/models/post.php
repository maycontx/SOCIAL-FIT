<?php
namespace Model;

/**
* 
*/
class Post
{
	
	public $id;
	public $user;
	public $date;
	public $dateLastEdit;
	public $text;
	public $media;

	function __construct(){}		
	

	function id ($id = null){
		if ( $id === null )
			return $this->id;

		$this->id = $id;		
	}

	function user ($user = null){
		if ( $user === null )
			return $this->user;

		$this->user = $user;		
	}

	function date ($date = null){
		if ( $date === null )
			return $this->date;

		$this->date = $date;		
	}

	function dateLastEdit ($dateLastEdit = null){
		if ( $dateLastEdit === null )
			return $this->dateLastEdit;

		$this->dateLastEdit = $dateLastEdit;		
	}

	function text ($text = null){
		if ( $text === null )
			return $this->text;

		$this->text = $text;		
	}

	function media ($media = null){
		if ( $media === null )
			return $this->media;

		$this->media = $media;		
	}
}