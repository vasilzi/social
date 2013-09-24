<?php defined('SYSPATH') OR die('No direct script access.');

Route::set('social', 'social/<action>')
		->defaults(array(
			//'directory'  => 'Widget',
			'controller' => 'Social',
));