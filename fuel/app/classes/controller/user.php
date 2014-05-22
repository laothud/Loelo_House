<?php
class Controller_User extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/user_dash');
		$this->template->content->posts = Model_Post::get_by_username(Session::get('username'));
		$this->template->content->arts = Model_Art::get_by_username(Session::get('username'));
		$this->template->content->videos = Model_Video::get_by_username(Session::get('username'));
	}

	/**
	 *add a art to the DB
	 */
	public function action_newart()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
			if($user->group_id == "3")
			{
			  	if (Input::method() == 'POST')
			    {
					$newartwork = new Model_Art();
					$newartwork->artcode = Input::param("artcode");
					$newartwork->userid = $user->id;
					$newartwork->username = $sessionUsername;
					$newartwork->save();
			    }
			}

			Response::redirect('user');
		}
		else
		{
			Response::redirect('login');
		}
	}

	/**
	 *delete a art in the DB
	 */
	public function action_deleteart()
	{
		if (isset($this)) {
			$deletedArt = Model_Art::find($this->param("art"));
			$deletedArt->delete();
		}

		Response::redirect('admin_art');
		
	}

	/**
	 *add a post to the DB
	 */
	public function action_newpost()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
			if($user->group_id == "3")
			{
			  	if (Input::method() == 'POST')
			    {
		    		$newpost = new Model_Post();
					$newpost->title = Input::param("title");
					$newpost->description = Input::param("description");
					$newpost->userid = $user->id;
					$newpost->username = $sessionUsername;
					$newpost->save();
			    }
			}
			Response::redirect('user');
		}
		else
		{
			Response::redirect('login');
		}
			
	}

	/**
	 *delete a post in the DB
	 */
	public function action_deletepost()
	{
		if (isset($this)) {
			$deletedPost = Model_Post::find($this->param("post"));
			$deletedPost->delete();
		}

		Response::redirect('user');
		
	}

	/**
	 *update a post in the DB
	 */
	public function action_updatepost()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
			if($user->group_id == "3")
			{
			  	if (Input::method() == 'POST')
			    {
					$updatedPost = Model_Post::find(Input::param("updateid"));
					$updatedPost->title = Input::param("updatetitle");
					$updatedPost->description = Input::param("updatedescription");
					$updatedPost->save();
			    }
			}

			Response::redirect('user');
		}
		else
		{
			Response::redirect('login');
		}
	}

	/**
	 *add a video to the DB
	 */
	public function action_newvideo()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
			if($user->group_id == "3")
			{
			  	if (Input::method() == 'POST')
			    {
					$newvideo = new Model_Video();
					$newvideo->videocode = Input::param("videocode");
					$newvideo->userid = $user->id;;
					$newvideo->username = $sessionUsername;
					$newvideo->save();
			    }
			}
			Response::redirect('user');
		}
		else
		{
			Response::redirect('login');
		}
	}

	/**
	 *delete a video in the DB
	 */
	public function action_deletevideo()
	{
		if (isset($this)) {
			$deletedVideo = Model_Video::find($this->param("video"));
			$deletedVideo->delete();
		}

		Response::redirect('user');
	}
	
}