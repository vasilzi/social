<?php defined('SYSPATH') OR die('No direct script access.');

class Profile {
	private $id;
	private $email;
	private $password;
	private $confirmation;
	
	function __construct($id=null, $email=null, $password=null, $confirmation=null)
	{
		$this->id=$id;
		$this->email=$email;
		$this->password=$password;
		$this->confirmation=$confirmation;
	}
	
	public function store()
	{
		// MYSQL: ON DUPLICATE KEY
		
		//if($this->id)
		//	$this->update();
		//else
		//	$this->save();
		
		if(DB::select()
			->from('profile')
			->where('email', '=', $this->email)
			->limit(1)
			->execute()
			->count()==1)
		{
			$this->update();
		}
		else
		{
			$this->save();
		}
	}
	
	private function save()
	{
		DB::insert('profile', array('email', 'password', 'confirmation'))->values(array($this->email, $this->password, $this->confirmation))->execute();
	}
	
	private function update()
	{
		DB::update('profile')->set(array('email'=>$this->email, 'password'=>$this->password, 'confirmation'=>$this->confirmation))->where('id', '=', $this->id)->execute();
	}
	
	public function login()
	{
		Session::instance()->set('user', clone $this);
	}
	
	public static function logout()
	{
		Session::instance()->set('user', null);
	}
	
	public static function loggedIn()
	{
		return self::current() instanceof Profile;
	}
	
	public static function current()
	{
		return Session::instance()->get('user');
	}
	
	public static function checkUnique($email)
	{
		return !(bool)DB::select()->from('profile')->where('email', '=', $email)->limit(1)->execute()->count();
	}
	
	public static function getProfileByConfirmation($confirmation)
	{
		return DB::select()->from('profile')->where('confirmation', '=', $confirmation)->as_object('Profile')->execute()->current();
	}
	
	public static function getByEmailAndPass($email, $password)
	{
		return DB::select()->from('profile')->where('email', '=', $email)->and_where('password', '=', $password)->as_object('Profile')->execute()->current();
	}
	
	public static function getAll()
	{
		$iter=new ArrayIterator(DB::select()->from('profile')->execute()->as_array());
		return $iter;
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
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setEmail($value)
	{
		$this->email=$value;
		return $this;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function setPassword($value)
	{
		$this->password=$value;
		return $this;
	}
	
	public function getConfirmation()
	{
		return $this->confirmation;
	}
	
	public function setConfirmation($value)
	{
		$this->confirmation=$value;
		return $this;
	}
}