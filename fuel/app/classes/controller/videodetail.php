<?php
class Controller_Videodetail extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/videodetail');
		$this->template->content->thevideo = Model_Video::get_one($this->param("id"));
		$this->template->content->videos = Model_Video::get_results();
	}
	
}