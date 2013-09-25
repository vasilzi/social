<?php defined('SYSPATH') OR die('No direct script access.');

class Social {
	private $id;
	private $profile_id;
	private $social_profile_id;
	private $data;
	private $time_added;
	private $type;
	
	// Method to save the data into the database
	public function save()
	{
		DB::insert('social', 
		array(
		'profile_id',
		'social_profile_id',
		'data',
		'time_added',
		'type'))->values(
		array(
		$this->profile_id,
		$this->social_profile_id,
		$this->data,
		$this->time_added,
		$this->type))->execute();
	}
	
	public function update()
	{
		DB::update('social')->set(
		array(
		'profile_id'=>$this->profile_id,
		'social_profile_id'=>$this->social_profile_id,
		'data'=>$this->data,
		'time_added'=>$this->time_added,
		'type'=>$this->type))->where('id', '=', $this->id)->execute();
	}
	
	public static function getByTypeAndProfile($type, $profile_id)
	{
		return DB::select()->from('social')->where('type', '=', $type)->and_where('profile_id', '=', $profile_id)->as_object('Social')->execute()->current();
	}
	
	public static function getByProfile($profile_id)
	{
		return DB::select()->from('social')->where('profile_id', '=', $profile_id)->order_by('time_added', 'desc')->as_object('Social')->execute();
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