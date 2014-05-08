<?php

/**
 * 
 */
abstract class Controller_App extends Controller_Template
{
	/**
	 *
	 */
	protected $auth;

	/**
	 *
	 */
	protected $user;

	/**
	 * loads the header and footer needs the if statement to decide what header needs to be loaded.
	 */
	public function before()
	{
		
		parent::before();

		$this->_init_auth();
		$this->_init_user();

		isset($this->template) and $this->_init_template();
	}

	/**
	 *
	 */
	public function is_logged_in()
	{
		return isset($this->user->id);
	}

	/**
	 *
	 */
	protected function _init_auth()
	{
		$this->auth = Auth::instance();
	}

	/**
	 *
	 */
	protected function _init_user()
	{
		if ($this->auth->check())
		{
			$user_id = $this->auth->get_user_id()[1];
			$this->user = Model_User::get_by_id($user_id);
		}
	}

	/**
	 *
	 */
	protected function _init_template()
	{
		$this->template->header = View::forge('site/header');
		$this->template->footer = View::forge('site/footer');
	}


	
}