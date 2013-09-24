<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Profile extends Controller_MainController
{
	public function action_register() 
	{
		// Set the form rules
		$post = Validation::factory($_POST)
		->rule('email', 'not_empty')
		->rule('email', 'email')
		->rule('email', 'ValidationHelper::email3fs', array(':value'))
		// Custom callback rule
		->rule('email', 'Profile::checkUnique', array(':value'))
		->rule('password', 'not_empty');
		
		if($_POST)
		{
			if ($post->check())
			{
				// If everything is ok, register the user and send him a confirmation link
				$confirmation=md5($post['email'].microtime(true));
				$profile=new Profile();
				$profile->setEmail($post['email'])
						->setPassword(md5($post['password']))
						->setConfirmation($confirmation)
						->save();
				
				// mail();
				
				$flash='Please confirm you account by clicking on the link we\'ve sent you to your email.';
				$this->template->set_global('flash', $flash);
			}
			else
			{
				// Validation failed, collect the errors
				$errors = $post->errors('register');
			}
		}
		$this->template->bind('post', $post)
		->bind('errors', $errors);
	}
	
	public function action_confirm()
	{
		$confirmation=$this->request->query('code');
		
		if($confirmation)
		{
			$profile=Profile::getProfileByConfirmation($confirmation);
			
			if(!$profile)
				HTTP::redirect('/profile/register');
			else
			{
				// If the code is found in the database, clear the confirmation column and log in the user
				$profile->setConfirmation('')
						   ->update();
				$profile->login();
				HTTP::redirect('/');
			}
		}
		exit;
	}
	
	public function action_logout()
	{
		Profile::logout();
		HTTP::redirect('/');
	}
	
	public function action_login()
	{
		$post = Validation::factory($_POST)
		->rule('email', 'not_empty')
		->rule('email', 'email')
		->rule('password', 'not_empty');
		
		if($_POST)
		{
			if ($post->check())
			{
				$profile=Profile::getByEmailAndPass($post['email'], md5($post['password']));
				if(!$profile)
				{
					$flash='Wrong login credentials.';
					$this->template->set_global('flash', $flash);
				}
				else
				{
					if($profile->getConfirmation()!="")
					{
						// Set flash, the user hasn't confirmed the email
						HTTP::redirect('profile/login');
					}
					$profile->login();
					HTTP::redirect('/');
				}
			}
			else
			{
				// Validation failed, collect the errors
				$errors = $post->errors('register');
			}
		}
		
		$this->template->bind('post', $post)
		->bind('errors', $errors);
	}
}