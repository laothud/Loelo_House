<?php
class Controller_Art extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/art');
		$this->template->content->arts = Model_Art::get_results();
	}
	
}