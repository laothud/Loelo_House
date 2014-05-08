<?php
class Controller_Art extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/admin_dash');
	}
	
}