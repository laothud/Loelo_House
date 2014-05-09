<?php
class Controller_Auth extends Controller_App
{

	public function get_login()
	{
		if ($this->is_logged_in())
	    {
	    	$sessionUsername = Session::get('username');
		    $user = Model_User::get_one($sessionUsername);
		    if ($user->group_id == "6") {
		    	Response::redirect('admin');
		    }else if ($user->group_id == "3") {
		    	Response::redirect('user');
		    }
	        
	    }
	    $this->template->content = View::forge('site/login');
	}

	/**
	 *
	 */
	public function post_login()
	{
		// check to see if they are already logged in.
	    if (Auth::check())
	    {

	    	$sessionUsername = Session::get('username');
		    $user = Model_User::get_one($sessionUsername);
	      	//redirect to dash of said user group
	      	if ($user->group_id == 6) {
	      		Response::redirect('admin');
	      	}
	        
	        Response::redirect('user');
	    }

	    // was the login form posted?
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
			    // check the credentials.
		        if (Auth::login(Input::param('username'), Input::param('password')))
		        {
		        	$sessionUsername = Session::get('username');
		        	$user = Model_User::get_one($sessionUsername);
		            // logged in, go to the appropriate dash based on the group_id which identifies the user into one of two catagories 
		            //either a 6 for admin or a 3 for user.
		            if ($user->group_id == 6) 
		            {
			      		Response::redirect('admin');
			      	}

			      	if ($user->group_id == 3) 
			      	{
			      		Response::redirect('user');
			      	}


		        }
		        else
		        {
		            // login failed, show error
		            Messages::error(__('login.failure'));
		        }
			}
			else
			{
			    // login failed, show error
		            Messages::error(__('login.failure'));
			}
	    }
	}

	/**
	 *
	 */
	public function action_logout()
	{
	    // logout
	    Auth::logout();

	    // return to login
	    Response::redirect('login');
	}

}