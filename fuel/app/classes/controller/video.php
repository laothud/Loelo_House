<?php
class Controller_Video extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/video');
		$this->template->content->videos = Model_Video::get_results();
	}
	
}