<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_MainController {

	public function action_index()
	{
		//echo View::factory('index')->render();
		//exit;
	}
	
	public function action_facebook()
	{
		$facebook = new Facebook(array(
				'appId'  => '661318317219555',
				'secret' => '2615823f5ad3e805418f5017f64d6929',
		));
		
		// Get User ID
		$user = $facebook->getUser();
		var_dump($user);
		$params = array(
				//'scope' => 'read_stream, friends_likes',
				'redirect_uri' => 'http://3fstest.si/welcome/facebook'
		);
		
		$loginUrl = $facebook->getLoginUrl($params);
		echo '<a href="'.$loginUrl.'">app</a>';
		
		$user_profile=$facebook->api('https://graph.facebook.com/'.$user.'/picture?width=140&height=110');
		print_r($user_profile);
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

} // End Welcome

