<?php
class FacebookWrapper
{
	private static function getConfig()
	{
		return Kohana::$config->load('social')->get('facebook');
	}
	
	public static function getObject()
	{
		$config=self::getConfig();
		$profile_id=Profile::current()->getId();
		
		$facebook = new Facebook(array(
				'appId'  => $config['appId'],
				'secret' => $config['secret'],
		));
		
		return $facebook;
	}
	
	public static function authorize()
	{
		$config=self::getConfig();
		$facebook=FacebookWrapper::getObject();
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