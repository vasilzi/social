<?php defined('SYSPATH') OR die('No direct script access.');

class SocialProfile{
	private $avatar;
	private $first_name;
	private $last_name;
	private $location;
	private $gender;
	private $description;
	private $github;
	private $team;
	
	private $is_resolved=false;
	
	public function __call($name, $arguments)
	{
		$serialized=array('avatar', 'first_name', 'last_name', 'location', 'gender', 'description', 'github', 'team');
		$property=strtolower(substr($name, 3));
		if(!in_array($property, $serialized))
		{
			throw new Exception('Method not found.');
		}
		
		if(substr($name, 0, 3)=='get')
		{
			if(!$this->is_resolved)
				$this->resolve();
			
			return $this->$property;
		}
		
		if(substr($name, 0, 3)=='set')
		{
			if(!$this->is_resolved)
				$this->resolve();
			
			$this->$property=$arguments[0];
			return $this;
		}
		
		throw new Exception('Method not found.');
	}
	
	private function resolve()
	{
		if(!$this->profile_id)
		{
			throw new Exception('Profile id not found.');
		}
		
		$sp=Social::getBYProfile($this->profile_id);
		$sp_data=array();
		foreach($sp as $spp)
		{
			$sp_data[]=unserialize($spp->getData());
		}
		
		$sp_all=array();
		
		foreach($sp_data as $spd)
		{
			$sp_all=$sp_all+$spd;
		}
		
		foreach($sp_all as $property=>$value)
		{
			$this->$property=$value;
		}
		
		$this->is_resolved=true;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setId($value)
	{
		$this->id=$value;
		return $this;
	}
	
	public function getProfileId()
	{
		return $this->profile_id;
	}
	
	public function setProfileId($value)
	{
		$this->profile_id=$value;
		return $this;
	}
	
	public function getSocialProfileId()
	{
		return $this->social_profile_id;
	}
	
	public function setSocialProfileId($value)
	{
		$this->social_profile_id=$value;
		return $this;
	}
	
	public function getData()
	{
		return $this->data;
	}
	
	public function setData($value)
	{
		$this->data=$value;
		return $this;
	}
	
	public function getTimeAdded()
	{
		return $this->time_added;
	}
	
	public function setTimeAdded($value)
	{
		$this->time_added=$value;
		return $this;
	}
	
	public function getType()
	{
		return $this->type;
	}
	
	public function setType($value)
	{
		$this->type=$value;
		return $this;
	}
}