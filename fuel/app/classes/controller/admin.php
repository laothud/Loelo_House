<?php
class Controller_Admin extends Controller_App
{

	public function action_index()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
		  if($user->group_id == "6")
		  {
		  	$this->template->content = View::forge('site/admin_dash');
			$this->template->content->posts = Model_Post::get_results();
		  }
		}else{
			Response::redirect('login');
		}
		
	}
	
}