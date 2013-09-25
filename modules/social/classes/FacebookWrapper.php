<?php
class FacebookWrapper
{
	public static function authorize()
	{
		$profile_id=Profile::current()->getId();
		$config=Kohana::$config->load('social')->get('facebook');
		
		$facebook = new Facebook(array(
				'appId'  => $config['appId'],
				'secret' => $config['secret'],
		));
		
		// Get User ID
		$user = $facebook->getUser();
		
		$params = array(
				//'scope' => 'read_stream, friends_likes',
				'redirect_uri' => $config['redirect_uri']
		);
		
		if(!$user)
		{
			$loginUrl = $facebook->getLoginUrl($params);
			HTTP::redirect($loginUrl);
		}
		
		return $facebook;
	}
}