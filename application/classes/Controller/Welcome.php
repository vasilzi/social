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
		var_dump($facebook);
		$params = array(
				//'scope' => 'read_stream, friends_likes',
				'redirect_uri' => 'http://3fstest.si/welcome/facebook'
		);
		
		$loginUrl = $facebook->getLoginUrl($params);
		echo '<a href="'.$loginUrl.'">app</a>';
	}

} // End Welcome
