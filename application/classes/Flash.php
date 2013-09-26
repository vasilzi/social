<?php
namespace my\helpers;

defined('SYSPATH') or die('No direct script access.');
 
class Flash
{
	public static function set($message, $key='info')
	{
		\Session::instance()->set('flash_'.$key, $message);
	}
	
	public static function get($key='info')
	{
		return \Session::instance()->get_once('flash_'.$key);
	}
	
	public static function check($key='info')
	{
		return \Session::instance()->get('flash_'.$key);
	}
}