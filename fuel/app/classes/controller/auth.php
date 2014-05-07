<?php
class Controller_Auth extends Controller_App
{

	public function get_login()
	{
		if (Auth::check())
	    {
	        Response::redirect_back('login');
	    }
	    else
	    {
			$this->template->content = View::forge('site/login');
		}
	}

	/**
	 *
	 */
	public function post_login()
	{
		if (Auth::check())
	    {
	        Response::redirect('/');
	    }

		$val = Validation::forge('my_validation');
		$val->add_field('username', 'Your_username', 'required');
		$val->add_field('password', 'Your_password', 'required|min_length[3]|max_length[10]');

		if (! $val->run())
		{
			Response::redirect('login');
		}

		// Auth::login();

		$user = Model_User::get_one($username);
		$userList = [];

		if ($user != null) 
		{
			if ($username == "Admin" && $user->name == "Admin"){
    			if (md5($password) == $user->password)
    			{
    				$this->template->content = View::forge('site/admin_dash');
    				$this->template->content->posts = Model_Post::get_results();
    			}
    		}
    		else if ($username == $user->name) 
    		{
    			if(md5($password) == $user->password)
    			{
    				$this->template->content = View::forge('site/user_dash');
    				$this->template->content->posts = Model_Post::get_results();
    			}
    		}
    		else
    		{
    			Response::redirect('login');
    		}
	    	
		}	
		
	}

}