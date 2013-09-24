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
		$social->save();
		
		HTTP::redirect('/social/facebook');
		exit;
	}
	
	public function action_facebook()
	{
		
	}
	
	public function action_twitter()
	{
		if (!isset($_GET["oauth_token"])) {
			$twitter = new TwitterOAuth('pHRwKztbGNnFwtCOcUJFg', '9fkwgwtrcQm1O4SSKaldNbNex9vOePC6k9FdnKTvY');
			$credentials = $twitter->getRequestToken("http://3fstest.si/welcome/twitter");
			// append a ?. This is your callback URL if you specify something.
			$url = $twitter->getAuthorizeUrl($credentials);
			echo '<a href="'.$url.'">app</a>';
			Session::instance()->set("token", $credentials["oauth_token"]);
			Session::instance()->set("secret", $credentials["oauth_token_secret"]);
		} else {
			$twitter = new TwitterOAuth('pHRwKztbGNnFwtCOcUJFg', '9fkwgwtrcQm1O4SSKaldNbNex9vOePC6k9FdnKTvY',
					Session::instance()->get("token"), Session::instance()->get("secret"));
			$credentials = $twitter->getAccessToken($_GET["oauth_verifier"]);
			// uses the oauth_token already.
			// you store these in your database
			echo '<a href="'.$credentials.'">app</a>';
		}
	}
	
	public function action_github()
	{
		
	}
}