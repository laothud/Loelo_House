<?php
/**
 * extends a base of funcctionality from App.php in the controller folder.
 */
class Controller_Home extends Controller_App
{
	/**
	* Loads the home page
	*/
	public function action_index()
	{
		$this->template->content = View::forge('site/index');
		$this->template->content->posts = Model_Post::get_results();
		$this->template->content->users = Model_User::get_results();
	}
	
}