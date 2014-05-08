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
		// check to see if they are already logged in.
	    if (Auth::check())
	    {
	      	//redirect to dash of said user group
	      	if () {
	      		Response::redirect('admin_dash');
	      	}
	        
	        Response::redirect('user_dash');
	    }

	    // was the login form posted?
	    if (Input::method() == 'POST')
	    {
	        // check the credentials.
	        if (Auth::instance()->login(Input::param('username'), Input::param('password')))
	        {
	            // logged in, go to the appropriate dash
	            Response::redirect('admin_dash');
	        }
	        else
	        {
	            // login failed, show error
	            Messages::error(__('login.failure'));
	        }
	    }
	}

}