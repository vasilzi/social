<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Social extends Controller_MainController
{
	public function action_facebook_app()
	{
		if($this->request->query('error')=='access_denied' && $this->request->query('error_reason')=='user_denied')
		{
			HTTP::redirect('/social/facebook');
		}
		$profile_id=Profile::current()->getId();
		
		$facebook=FacebookWrapper::authorize();
		
		$user_profile=$facebook->api($facebook->getUser());
		
		$avatar=json_decode(file_get_contents("http://graph.facebook.com/".$facebook->getUser()."/picture?redirect=false"));
		$avatar=$avatar->data->url;
		
		$social=new Social();
		$social->setProfileId($profile_id)
			   ->setSocialProfileId($user_profile['id'])
			   ->setType('facebook')
			   ->setData(serialize(array('first_name'=>$user_profile['first_name'],
						'last_name'=>$user_profile['last_name'],
						'location'=>$user_profile['hometown']['name'],
						'gender'=>$user_profile['gender'],
			   			'avatar'=>$avatar)))
			   ->setTimeAdded(time());

		$already_in=Social::getByTypeAndProfile('facebook', $profile_id);
		if($already_in)
		{
			$social->setId($already_in->getId());
			$social->update();
		}
		else
		{
			$social->save();
		}
		
		Flash::set('Facebook data updated.');
		HTTP::redirect('/social/facebook');
		exit;
	}
	
	public function action_facebook()
	{
		$social=Social::getByTypeAndProfile('facebook', Profile::current()->getId());
		if($social)
		{
			$this->template->set('info', unserialize($social->getData()));
		}
		
		$facebook=FacebookWrapper::getObject();
		if($facebook->getUser())
		{
			$this->template->set('revoke', true);
		}
	}
	
	public function action_twitter_app()
	{
		if(isset($_GET['denied'])&& $_GET['denied']!='')
		{
			HTTP::redirect('/social/twitter');
		}
		
		$twitter=TwitterWrapper::authorize();
		$credentials=$twitter->get('account/verify_credentials');
		
		$social=new Social();
		$social->setType('twitter')
			   ->setProfileId(Profile::current()->getId())
			   ->setSocialProfileId($credentials->id)
			   ->setTimeAdded(time())
			   ->setData(serialize(array(//'oauth_token'=>$credentials['oauth_token'],
			   				   //'oauth_token_secret'=>$credentials['oauth_token_secret'],
			   				   'location'=>$credentials->location,
			   				   'description'=>$credentials->description,
			   				   'avatar'=>$credentials->profile_image_url)));
		
		$already_in=Social::getByTypeAndProfile('twitter', Profile::current()->getId());
		if($already_in)
		{
			$social->setId($already_in->getId());
			$social->update();
		}
		else
		{
			$social->save();
		}
		
		Flash::set('Twitter data updated succesfully.');
		HTTP::redirect('/social/twitter');
	}
	
	public function action_twitter()
	{
		$social=Social::getByTypeAndProfile('twitter', Profile::current()->getId());
		if($social)
		{
			$this->template->set('info', unserialize($social->getData()));
		}
	}
	
	public function action_other()
	{
		$post = Validation::factory($_POST);
		$social=Social::getByTypeAndProfile('other', Profile::current()->getId());
		
		if($_POST)
		{
			if ($post->check())
			{
				if(!$social)
				{
					$social=new Social();
					$social->setProfileId(Profile::current()->getId())
						   ->setTimeAdded(time())
						   ->setType('other')
						   ->setData(serialize(array('github'=>$post['github'],
						   							 'team'=>$post['team'])));
					$social->save();
				}
				else
				{
					$social->setTimeAdded(time())
						   ->setData(serialize(array('github'=>$post['github'],
						   							 'team'=>$post['team'])));
					$social->update();
				}
				
				Flash::set('Succesfully saved.');
				HTTP::redirect('/social/other');
			}
		}
		
		$info=array();
		if($social)
		{
			$info=unserialize($social->getData());
		}
		
		$this->template->set('post', $post);
		$this->template->set('info', $info);
	}
	
	public function action_facebook_revoke()
	{
		$facebook=FacebookWrapper::getObject();
		
		if(!$facebook->getUser())
		{
			HTTP::redirect('/social/facebook');
		}
		
		$facebook->api('/'.$facebook->getUser().'/permissions', 'delete');
		$facebook->destroySession();
		
		$social=Social::getByTypeAndProfile('facebook', Profile::current()->getId());
		$social->delete();
		
		Flash::set('3fs app permissions revoked succesfully.');
		HTTP::redirect('/social/facebook');
	}
}