<?php
class Controller_Home extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/index');
		
	}
	
}