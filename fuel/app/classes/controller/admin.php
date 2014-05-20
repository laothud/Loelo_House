<?php
class Controller_Admin extends Controller_App
{
	/**
	 *if admin logged in go to dash
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

	public function action_userdelete()
	{
		if (isset($this)) {
			Auth::delete_user($this->param('user'));
		}

		Response::redirect('admin_user');
	}

	public function action_userupdate()
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

		if (Input::method() == 'POST')
	    {
    		$val = Validation::forge('my_validation');

			// Add a field for username, give it the label "Your username" and make it required
			$val->add('updateusername', 'Your username')->add_rule('required');

			// Now add another field for password, and require it to contain at least 3 and at most 10 characters
			$val->add('updatepassword', 'Your password')->add_rule('required')->add_rule('min_length', 3)->add_rule('max_length', 10);

			// run validation on just post
			if ($val->run())
			{
				if(Auth::change_password(Input::param("oldpassword"), Input::param("updatepassword"), Input::param("updateusername")))
				{
					Response::redirect('admin_user');
				}else{
					echo "Error";
				}
			}
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

		if (Input::method() == 'POST')
	    {
    		$val = Validation::forge('my_validation');

			// Add a field for username, give it the label "Your username" and make it required
			$val->add('username', 'Your username')->add_rule('required');

			// Now add another field for password, and require it to contain at least 3 and at most 10 characters
			$val->add('password', 'Your password')->add_rule('required')->add_rule('min_length', 3)->add_rule('max_length', 10);

			// run validation on just post
			if ($val->run())
			{
				Auth::create_user(
		            Input::param("username"),//username
		            Input::param("password"),//password
		            'default@loelo.com',//email
		            3,//group_id
		            array(
		                'quote' => Input::param("quote"),//quote
		            )
		        );
		        Response::redirect('admin_user');
			}
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

	/**
	 *add a event to the DB
	 */
	public function action_newevent()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
			if($user->group_id == "6")
			{
			  	if (Input::method() == 'POST')
			    {
		    		$newevent = new Model_Event();
					$newevent->title = Input::param("title");
					$newevent->description = Input::param("description");
					$newevent->userid = $user->id;
					$newevent->save();
			    }
			}
			
			Response::redirect('admin_events');
		}
		else
		{
			Response::redirect('login');
		}
	}

	/**
	 *delete a event in the DB
	 */
	public function action_deleteevent()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
			if($user->group_id == "6")
			{
			  	if (isset($this)) {
					$deletedEvent = Model_Event::find($this->param("event"));
					$deletedEvent->delete();
				}

				Response::redirect('admin_events');
			}
		}else{
			Response::redirect('login');
		}
		
	}

	/**
	 *update a event in the DB
	 */
	public function action_updateevent()
	{
		$sessionUsername = Session::get('username');
		$user = Model_User::get_one($sessionUsername);
		if(isset($user))
		{
			if($user->group_id == "6")
			{
			  	if (isset($this)) {
					if (Input::method() == 'POST')
				    {
						$updatedEvent = Model_Event::find(Input::param("eventid"));
						$updatedEvent->title = Input::param("updatetitle");
						$updatedEvent->description = Input::param("updatedescription");
						$updatedEvent->save();
					}
				}

				Response::redirect('admin_events');
			}
		}else{
			Response::redirect('login');
		}
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
			if($user->group_id == "6")
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

			Response::redirect('admin_art');
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
			if($user->group_id == "6")
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
			Response::redirect('admin');
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

		Response::redirect('admin');
		
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
			if($user->group_id == "6")
			{
			  	if (Input::method() == 'POST')
			    {
					$updatedPost = Model_Post::find(Input::param("updateid"));
					$updatedPost->title = Input::param("updatetitle");
					$updatedPost->description = Input::param("updatedescription");
					$updatedPost->save();
			    }
			}

			Response::redirect('admin');
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
			if($user->group_id == "6")
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
			Response::redirect('admin_video');
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

		Response::redirect('admin_video');
	}
	
}