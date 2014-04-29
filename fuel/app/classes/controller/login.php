<?php
class Controller_Login extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/login');
		
	}
	
}