<?php
class Controller_Events extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/events');
		
	}
	
}