<?php
class Controller_Video extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/video');
		
	}
	
}