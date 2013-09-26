<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_MainController {

	public function action_index()
	{
		if(!Profile::loggedIn())
		{
			HTTP::redirect('/profile/login');
		}
		$social_profiles=Social::getByProfile(Profile::current()->getId());
		$social=array();
		foreach($social_profiles as $sp)
		{
			$social[]=unserialize($sp->getData());
		}
		$this->template->set('social', $social);
	}
}