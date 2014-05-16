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
	
}