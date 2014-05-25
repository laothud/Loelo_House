<?php
class Controller_Blogdetail extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/blogdetail');
		$this->template->content->post = Model_Post::get_one($this->param("id"));
	}
	
}