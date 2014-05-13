<?php
class Controller_Admin extends Controller_App
{
	/**
	 *
	 */
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

	/**
	 *
	 */
	public function action_user()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
		  if($user->group_id == "6")
		  {
		  	$this->template->content = View::forge('site/admin_user');
			$this->template->content->users = Model_User::get_results();
		  }
		}else{
			Response::redirect('login');
		}
	}

	public function action_art()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
		  if($user->group_id == "6")
		  {
		  	$this->template->content = View::forge('site/admin_art');
			$this->template->content->arts = Model_Art::get_results();
		  }
		}else{
			Response::redirect('login');
		}
	}

	public function action_video()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
		  if($user->group_id == "6")
		  {
		  	$this->template->content = View::forge('site/admin_video');
			$this->template->content->videos = Model_Video::get_results();
		  }
		}else{
			Response::redirect('login');
		}
	}

	public function action_events()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
		  if($user->group_id == "6")
		  {
		  	$this->template->content = View::forge('site/admin_event');
			$this->template->content->events = Model_Event::get_results();
		  }
		}else{
			Response::redirect('login');
		}
	}
	
}