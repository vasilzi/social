<?php defined('SYSPATH') or die('No direct script access.');

class Controller_MainController extends Controller {
	
	protected $template;
	
	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		
		if(!Profile::loggedIn() && $this->request->controller()!='Profile' && $this->request->controller()!='Welcome')
		{
			Flash::set('Please log in first.');
			HTTP::redirect('/');
		}
		
		if($this->request->controller()!='Welcome')
		{
			$this->template=$this->request->controller().'/'.$this->request->action();
		}
		else
		{
			$this->template=$this->request->action();
		}
		try
		{
			$this->template=View::factory($this->template);
		} catch (Exception $e) { }
	}
	
	public function after()
	{
		if(is_object($this->template))
		{
			$this->template->set_global('header', View::factory('header'));
			$this->template->set_global('footer', View::factory('footer'));
			echo $this->template->render();
		}
	}
}