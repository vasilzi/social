<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-23 06:20:20 --- CRITICAL: View_Exception [ 0 ]: The requested view views/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:20:20 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('views/index')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('views/index', NULL)
#2 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View::factory('views/index')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:39:59 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:39:59 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:10 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:10 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:11 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:11 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:43 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:43 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:49 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:42:49 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:05 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:05 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:44:06 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:45:27 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:45:27 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:45:38 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:45:38 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:45:45 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:45:45 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:46:16 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:46:16 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:46:31 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:46:31 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:46:48 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:46:48 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:16 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:16 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:24 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:24 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:41 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:41 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:47 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:47:47 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:49:14 --- CRITICAL: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:49:14 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('register')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('register', NULL)
#2 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(7): Kohana_View::factory('register')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 06:58:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ MODPATH\profile\views\profile\register.php [ 21 ] in C:\wamp\www\3fs\modules\profile\views\profile\register.php:21
2013-09-23 06:58:09 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\views\profile\register.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 21, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\modules\profile\views\profile\register.php:21
2013-09-23 07:01:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting T_FUNCTION ~ MODPATH\profile\classes\Controller\Profile.php [ 29 ] in file:line
2013-09-23 07:01:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 07:01:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Validate' not found ~ MODPATH\profile\classes\Controller\Profile.php [ 7 ] in file:line
2013-09-23 07:01:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 07:02:54 --- CRITICAL: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 07:02:54 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('user/register')
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(30): Kohana_View->__construct('user/register', NULL)
#2 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(25): Kohana_View::factory('user/register')
#3 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\3fs\system\classes\Kohana\View.php:137
2013-09-23 07:03:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ MODPATH\profile\views\profile\register.php [ 21 ] in C:\wamp\www\3fs\modules\profile\views\profile\register.php:21
2013-09-23 07:03:27 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\views\profile\register.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 21, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(29): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\modules\profile\views\profile\register.php:21
2013-09-23 07:10:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ MODPATH\profile\views\profile\register.php [ 22 ] in file:line
2013-09-23 07:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 07:27:37 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_tables is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 229 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:6
2013-09-23 07:27:37 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(6): Kohana_Database_PDO->list_tables()
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:6
2013-09-23 07:28:08 --- CRITICAL: Database_Exception [ 0 ]: could not find driver ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 59 ] in C:\wamp\www\3fs\modules\database\classes\Kohana\Database\PDO.php:130
2013-09-23 07:28:08 --- DEBUG: #0 C:\wamp\www\3fs\modules\database\classes\Kohana\Database\PDO.php(130): Kohana_Database_PDO->connect()
#1 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(6): Kohana_Database_PDO->query(1, 'SHOW TABLES')
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\modules\database\classes\Kohana\Database\PDO.php:130
2013-09-23 07:29:26 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1 near "SHOW": syntax error [ SHOW TABLES ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:6
2013-09-23 07:29:26 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(6): Kohana_Database_PDO->query(1, 'SHOW TABLES')
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:6
2013-09-23 07:30:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::execute() ~ MODPATH\profile\classes\Controller\Profile.php [ 6 ] in file:line
2013-09-23 07:30:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 07:31:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH\profile\classes\Controller\Profile.php [ 6 ] in file:line
2013-09-23 07:31:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 07:31:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: text ~ MODPATH\profile\classes\Controller\Profile.php [ 8 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:8
2013-09-23 07:31:47 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 8, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:8
2013-09-23 07:47:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH\profile\classes\Controller\Profile.php [ 12 ] in file:line
2013-09-23 07:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 07:50:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\profile\classes\Controller\Profile.php [ 21 ] in file:line
2013-09-23 07:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 07:57:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Profile::setConfirmation() ~ MODPATH\profile\classes\Controller\Profile.php [ 23 ] in file:line
2013-09-23 07:57:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 08:00:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Profile::$template ~ MODPATH\profile\classes\Controller\Profile.php [ 25 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:25
2013-09-23 08:00:01 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\3fs...', 25, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:25
2013-09-23 08:04:12 --- CRITICAL: ErrorException [ 1 ]: Class 'User' not found ~ MODPATH\profile\classes\Controller\Profile.php [ 22 ] in file:line
2013-09-23 08:04:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 08:05:59 --- CRITICAL: ErrorException [ 8 ]: Object of class Database_Result_Cached could not be converted to int ~ MODPATH\profile\classes\Profile.php [ 16 ] in C:\wamp\www\3fs\modules\profile\classes\Profile.php:16
2013-09-23 08:05:59 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Profile.php(16): Kohana_Core::error_handler(8, 'Object of class...', 'C:\wamp\www\3fs...', 16, Array)
#1 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(22): Profile::checkUnique('zcz@asdas.com')
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\modules\profile\classes\Profile.php:16
2013-09-23 08:15:08 --- CRITICAL: ErrorException [ 2 ]: mail() [function.mail]: Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() ~ MODPATH\profile\classes\Controller\Profile.php [ 11 ] in file:line
2013-09-23 08:15:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail() [<a href...', 'C:\wamp\www\3fs...', 11, Array)
#1 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(11): mail('vasildb@gmail.c...', '3fs test', 'test')
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-09-23 08:25:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\profile\classes\Controller\Profile.php [ 59 ] in file:line
2013-09-23 08:25:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 08:37:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\profile\classes\Controller\Profile.php [ 59 ] in file:line
2013-09-23 08:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 08:38:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\profile\classes\Controller\Profile.php [ 59 ] in file:line
2013-09-23 08:38:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 08:38:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Result_Cached::getActivation() ~ MODPATH\profile\classes\Controller\Profile.php [ 59 ] in file:line
2013-09-23 08:38:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 08:39:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Result::get(), called in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php on line 59 and defined ~ MODPATH\database\classes\Kohana\Database\Result.php [ 184 ] in C:\wamp\www\3fs\modules\database\classes\Kohana\Database\Result.php:184
2013-09-23 08:39:18 --- DEBUG: #0 C:\wamp\www\3fs\modules\database\classes\Kohana\Database\Result.php(184): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\3fs...', 184, Array)
#1 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(59): Kohana_Database_Result->get()
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_confirm()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\modules\database\classes\Kohana\Database\Result.php:184
2013-09-23 08:52:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\wamp\www\3fs\system\classes\Kohana\Cookie.php:67
2013-09-23 08:52:50 --- DEBUG: #0 C:\wamp\www\3fs\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\wamp\www\3fs\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\wamp\www\3fs\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\3fs\system\classes\Kohana\Cookie.php:67
2013-09-23 08:54:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ MODPATH\profile\classes\Controller\Profile.php [ 53 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:54:47 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 53, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_confirm()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:55:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ MODPATH\profile\classes\Controller\Profile.php [ 53 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:55:30 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 53, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_confirm()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:55:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ MODPATH\profile\classes\Controller\Profile.php [ 53 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:55:44 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 53, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_confirm()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:56:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ MODPATH\profile\classes\Controller\Profile.php [ 53 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:56:16 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 53, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_confirm()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:57:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ MODPATH\profile\classes\Controller\Profile.php [ 53 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 08:57:36 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 53, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_confirm()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 09:00:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ MODPATH\profile\classes\Controller\Profile.php [ 53 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 09:00:20 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 53, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_confirm()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:53
2013-09-23 09:03:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ MODPATH\profile\classes\Controller\Profile.php [ 76 ] in file:line
2013-09-23 09:03:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 09:03:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ MODPATH\profile\classes\Controller\Profile.php [ 76 ] in file:line
2013-09-23 09:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 09:17:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: password ~ MODPATH\profile\classes\Profile.php [ 46 ] in C:\wamp\www\3fs\modules\profile\classes\Profile.php:46
2013-09-23 09:17:38 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Profile.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 46, Array)
#1 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(90): Profile::getByEmailAndPass('vasildb@gmail.c...', '123456')
#2 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\3fs\modules\profile\classes\Profile.php:46
2013-09-23 09:28:32 --- CRITICAL: ErrorException [ 1 ]: Class 'MainController' not found ~ MODPATH\profile\classes\Controller\Profile.php [ 4 ] in file:line
2013-09-23 09:28:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 09:28:58 --- CRITICAL: ErrorException [ 1 ]: Class 'MainController' not found ~ MODPATH\profile\classes\Controller\Profile.php [ 4 ] in file:line
2013-09-23 09:28:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 09:29:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH\classes\Controller\MainController.php [ 15 ] in file:line
2013-09-23 09:29:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 09:29:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ MODPATH\profile\views\profile\login.php [ 21 ] in C:\wamp\www\3fs\modules\profile\views\profile\login.php:21
2013-09-23 09:29:27 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\views\profile\login.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 21, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\MainController.php(16): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(87): Controller_MainController->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\modules\profile\views\profile\login.php:21
2013-09-23 09:32:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Profile::$templat ~ MODPATH\profile\classes\Controller\Profile.php [ 36 ] in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:36
2013-09-23 09:32:35 --- DEBUG: #0 C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\3fs...', 36, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Profile->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\3fs\modules\profile\classes\Controller\Profile.php:36
2013-09-23 09:45:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:45:53 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:39 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:39 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:40 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:46:40 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:06 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:21 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:22 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:22 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\index.php [ 1 ] in C:\wamp\www\3fs\application\views\index.php:1
2013-09-23 09:47:22 --- DEBUG: #0 C:\wamp\www\3fs\application\views\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\3fs...', 1, Array)
#1 C:\wamp\www\3fs\system\classes\Kohana\View.php(61): include('C:\wamp\www\3fs...')
#2 C:\wamp\www\3fs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\3fs...', Array)
#3 C:\wamp\www\3fs\application\classes\Controller\Welcome.php(7): Kohana_View->render()
#4 C:\wamp\www\3fs\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\3fs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\wamp\www\3fs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\3fs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\3fs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\3fs\application\views\index.php:1