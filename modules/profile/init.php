<?php defined('SYSPATH') OR die('No direct script access.');

Route::set('profileRegister', 'profile/<action>')
		->defaults(array(
			//'directory'  => 'Widget',
			'controller' => 'Profile',
));