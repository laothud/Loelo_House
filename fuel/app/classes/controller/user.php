<?php
class Controller_User extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/user_dash');
		$this->template->content->posts = Model_Post::get_by_username(Session::get('username'));
	}
	
}