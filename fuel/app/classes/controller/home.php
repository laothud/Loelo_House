<?php
/**
 * extends a base of funcctionality from App.php in the controller folders.
 */
class Controller_Home extends Controller_App
{
	/**
	* Loads the home page
	*/
	public function action_index()
	{
		$this->template->content = View::forge('site/index');
		
	}
	
}