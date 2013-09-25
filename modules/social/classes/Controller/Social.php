<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Social extends Controller_MainController
{
	public function action_facebook_app()
	{
		$profile_id=Profile::current()->getId();
		
		$facebook = new Facebook(array(
				'appId'  => '661318317219555',
				'secret' => '2615823f5ad3e805418f5017f64d6929',
		));
		
		// Get User ID
		$user = $facebook->getUser();
		
		$params = array(
				//'scope' => 'read_stream, friends_likes',
				'redirect_uri' => 'http://3fstest.si/social/facebook_app'
		);
		
		if(!$user)
		{
			$loginUrl = $facebook->getLoginUrl($params);
			HTTP::redirect($loginUrl);
		}
		
		$user_profile=$facebook->api($user);
		
		$social=new Social();
		$social->setProfileId($profile_id)
			   ->setSocialProfileId($user_profile['id'])
			   ->setType('facebook')
			   ->setData(serialize(array('first_name'=>$user_profile['first_name'],
						'last_name'=>$user_profile['last_name'],
						'location'=>$user_profile['hometown']['name'],
						'gender'=>$user_profile['gender'])))
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
	}
	
	public function action_twitter_app()
	{
		if(isset($_GET['denied'])&& $_GET['denied']!='')
		{
			HTTP::redirect('/social/twitter');
		}
		
		if (!isset($_GET["oauth_token"])) {
			$twitter = new TwitterOAuth('pHRwKztbGNnFwtCOcUJFg', '9fkwgwtrcQm1O4SSKaldNbNex9vOePC6k9FdnKTvY');
			$credentials = $twitter->getRequestToken("http://3fstest.si/social/twitter_app");
			
			$url = $twitter->getAuthorizeUrl($credentials);
			Session::instance()->set("token", $credentials["oauth_token"]);
			Session::instance()->set("secret", $credentials["oauth_token_secret"]);
			HTTP::redirect($url);
		} else {
			$twitter = new TwitterOAuth('pHRwKztbGNnFwtCOcUJFg', '9fkwgwtrcQm1O4SSKaldNbNex9vOePC6k9FdnKTvY',
					Session::instance()->get("token"), Session::instance()->get("secret"));
			$credentials = $twitter->getAccessToken($_GET["oauth_verifier"]);
			
			$credentials=$twitter->get('account/verify_credentials');
			
			$social=new Social();
			$social->setType('twitter')
				   ->setProfileId(Profile::current()->getId())
				   ->setSocialProfileId($credentials->id)
				   ->setTimeAdded(time())
				   ->setData(serialize(array(//'oauth_token'=>$credentials['oauth_token'],
				   				   //'oauth_token_secret'=>$credentials['oauth_token_secret'],
				   				   'location'=>$credentials->location,
				   				   'description'=>$credentials->description)));
			
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
			
			HTTP::redirect('/social/twitter');
		}
	}
	
	public function action_twitter()
	{
		$social=Social::getByTypeAndProfile('twitter', Profile::current()->getId());
		if($social)
		{
			$this->template->set('info', unserialize($social->getData()));
		}
	}
	
	public function action_github()
	{
		
	}
}