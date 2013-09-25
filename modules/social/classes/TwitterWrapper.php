<?php
class TwitterWrapper
{
	public static function authorize()
	{
		$config=Kohana::$config->load('social')->get('twitter');
		
		if (!isset($_GET["oauth_token"])) {
			$twitter = new TwitterOAuth($config['consumer_key'], $config['consumer_secret']);
			$credentials = $twitter->getRequestToken($config['oauth_callback']);
			
			$url = $twitter->getAuthorizeUrl($credentials);
			Session::instance()->set("token", $credentials["oauth_token"]);
			Session::instance()->set("secret", $credentials["oauth_token_secret"]);
			HTTP::redirect($url);
		} else {
			$twitter = new TwitterOAuth('pHRwKztbGNnFwtCOcUJFg', '9fkwgwtrcQm1O4SSKaldNbNex9vOePC6k9FdnKTvY',
					Session::instance()->get("token"), Session::instance()->get("secret"));
			$credentials = $twitter->getAccessToken($_GET["oauth_verifier"]);
			return $twitter;
		}
	}
}