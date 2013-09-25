<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-25 02:01:23 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 no such table: social [ INSERT INTO social (profile_id, social_profile_id, data, time_added, type) VALUES ('6', '1198824296', 'a:4:{s:10:"first_name";s:5:"Vasil";s:9:"last_name";s:9:"Zidrovski";s:8:"location";s:6:"Prilep";s:6:"gender";s:4:"male";}', 1380092483, 'facebook') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php:251
2013-09-25 02:01:23 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO soc...', false, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Social.php(26): Kohana_Database_Query->execute()
#2 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(39): Social->save()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_facebook_app()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php:251
2013-09-25 02:01:24 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 no such table: social [ INSERT INTO social (profile_id, social_profile_id, data, time_added, type) VALUES ('6', '1198824296', 'a:4:{s:10:"first_name";s:5:"Vasil";s:9:"last_name";s:9:"Zidrovski";s:8:"location";s:6:"Prilep";s:6:"gender";s:4:"male";}', 1380092483, 'facebook') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php:251
2013-09-25 02:01:24 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO soc...', false, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Social.php(26): Kohana_Database_Query->execute()
#2 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(39): Social->save()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_facebook_app()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php:251
2013-09-25 02:03:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\social\classes\Controller\Social.php [ 30 ] in file:line
2013-09-25 02:03:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 02:04:05 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 table "social" already exists [ CREATE TABLE "social" ("id" INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL , "profile_id" INTEGER, "social_profile_id" VARCHAR, "data" TEXT , "time_added" INTEGER, "type" VARCHAR); ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:04:05 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(30): Kohana_Database_PDO->query(NULL, 'CREATE TABLE "s...')
#1 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_facebook_app()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:04:24 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 table "social" already exists [ CREATE TABLE "social" ("id" INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL , "profile_id" INTEGER, "social_profile_id" VARCHAR, "data" TEXT , "time_added" INTEGER, "type" VARCHAR); ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:04:24 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(30): Kohana_Database_PDO->query(NULL, 'CREATE TABLE "s...')
#1 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_facebook_app()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:04:57 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 table "social" already exists [ CREATE TABLE "social" ("id" INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL , "profile_id" INTEGER, "social_profile_id" VARCHAR, "data" TEXT , "time_added" INTEGER, "type" VARCHAR); ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:04:57 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(30): Kohana_Database_PDO->query(NULL, 'CREATE TABLE "s...')
#1 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_facebook_app()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:05:57 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 table "social" already exists [ CREATE TABLE "social" ("id" INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL , "profile_id" INTEGER, "social_profile_id" VARCHAR, "data" TEXT , "time_added" INTEGER, "type" VARCHAR); ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:05:57 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(30): Kohana_Database_PDO->query(NULL, 'CREATE TABLE "s...')
#1 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_facebook_app()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:30
2013-09-25 02:08:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ MODPATH\social\views\social\facebook.php [ 3 ] in C:\wamp\www\3fs\social\modules\social\views\social\facebook.php:3
2013-09-25 02:08:51 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\social\views\social\facebook.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 3, Array)
#1 C:\wamp\www\3fs\social\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\social\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\social\application\classes\Controller\MainController.php(30): Kohana_View->render()
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(87): Controller_MainController->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#7 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\social\modules\social\views\social\facebook.php:3
2013-09-25 02:26:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getData() on a non-object ~ MODPATH\social\classes\Controller\Social.php [ 58 ] in file:line
2013-09-25 02:26:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 02:51:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\social\classes\Controller\Social.php [ 90 ] in file:line
2013-09-25 02:51:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 02:56:40 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH\social\classes\Controller\Social.php [ 84 ] in file:line
2013-09-25 02:56:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 02:57:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH\classes\twitteroauth.php [ 114 ] in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 02:57:26 --- DEBUG: #0 C:\wamp\www\3fs\social\application\classes\twitteroauth.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\3fs...', 114, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(77): TwitterOAuth->getAccessToken('ZuA7DcOfC2RQsiu...')
#2 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:01:45 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 near ",": syntax error [ INSERT INTO social (profile_id, social_profile_id, data, time_added, type) VALUES ('6', 1900267189, ('DUApyp6Ylu9jFGQlMISTF5t1w9CGy6CTJUQBF53hc', '', ''), 1380096105, 'twitter') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php:251
2013-09-25 03:01:45 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO soc...', false, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Social.php(26): Kohana_Database_Query->execute()
#2 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(89): Social->save()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter_app()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\social\modules\database\classes\Kohana\Database\Query.php:251
2013-09-25 03:02:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH\classes\twitteroauth.php [ 114 ] in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:02:10 --- DEBUG: #0 C:\wamp\www\3fs\social\application\classes\twitteroauth.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\3fs...', 114, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(77): TwitterOAuth->getAccessToken('uP0JHTP6lkThSX3...')
#2 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter_app()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:04:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH\classes\twitteroauth.php [ 114 ] in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:04:28 --- DEBUG: #0 C:\wamp\www\3fs\social\application\classes\twitteroauth.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\3fs...', 114, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(77): TwitterOAuth->getAccessToken('uP0JHTP6lkThSX3...')
#2 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter_app()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:09:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: profile_id ~ MODPATH\social\classes\Controller\Social.php [ 90 ] in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:90
2013-09-25 03:09:02 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 90, Array)
#1 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter_app()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:90
2013-09-25 03:09:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH\classes\twitteroauth.php [ 114 ] in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:09:20 --- DEBUG: #0 C:\wamp\www\3fs\social\application\classes\twitteroauth.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\3fs...', 114, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(77): TwitterOAuth->getAccessToken('44g3plB1lbK49oQ...')
#2 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter_app()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:18:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_verifier ~ MODPATH\social\classes\Controller\Social.php [ 77 ] in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:77
2013-09-25 03:18:41 --- DEBUG: #0 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(77): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\3fs...', 77, Array)
#1 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter_app()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php:77
2013-09-25 03:31:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH\social\classes\Controller\Social.php [ 87 ] in file:line
2013-09-25 03:31:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 03:31:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH\classes\twitteroauth.php [ 114 ] in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:31:43 --- DEBUG: #0 C:\wamp\www\3fs\social\application\classes\twitteroauth.php(114): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\3fs...', 114, Array)
#1 C:\wamp\www\3fs\social\modules\social\classes\Controller\Social.php(78): TwitterOAuth->getAccessToken('KkfH4dXs2lvWSf6...')
#2 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(84): Controller_Social->action_twitter_app()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Social))
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\social\application\classes\twitteroauth.php:114
2013-09-25 03:38:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_BOOLEAN_AND, expecting ',' or ')' ~ MODPATH\social\classes\Controller\Social.php [ 66 ] in file:line
2013-09-25 03:38:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 04:35:54 --- CRITICAL: ErrorException [ 1 ]: An iterator cannot be used with foreach by reference ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in file:line
2013-09-25 04:35:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 06:17:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\index.php [ 23 ] in file:line
2013-09-25 06:17:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\3fs...', 23, Array)
#1 C:\wamp\www\3fs\social\application\views\index.php(23): implode(', ', Array)
#2 C:\wamp\www\3fs\social\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#3 C:\wamp\www\3fs\social\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#4 C:\wamp\www\3fs\social\application\classes\Controller\MainController.php(30): Kohana_View->render()
#5 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(87): Controller_MainController->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2013-09-25 06:18:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_name ~ APPPATH\views\index.php [ 21 ] in C:\wamp\www\3fs\social\application\views\index.php:21
2013-09-25 06:18:01 --- DEBUG: #0 C:\wamp\www\3fs\social\application\views\index.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\3fs...', 21, Array)
#1 C:\wamp\www\3fs\social\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\social\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\social\application\classes\Controller\MainController.php(30): Kohana_View->render()
#4 C:\wamp\www\3fs\social\system\classes\Kohana\Controller.php(87): Controller_MainController->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\social\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\social\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\social\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\social\application\views\index.php:21
2013-09-25 06:23:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getId() on a non-object ~ APPPATH\classes\Controller\Welcome.php [ 7 ] in file:line
2013-09-25 06:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-25 06:28:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getId() on a non-object ~ MODPATH\social\classes\Controller\Social.php [ 57 ] in file:line
2013-09-25 06:28:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line