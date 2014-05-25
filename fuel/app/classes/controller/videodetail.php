<?php
class Controller_Videodetail extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/videodeatail');
		$this->template->content->video = Model_Video::get_one($this->param("id"));
	}
	
}