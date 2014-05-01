<?php

/**
 * 
 */
abstract class Controller_App extends Controller_Template
{
	/**
	 * loads the header and footer needs the if statement to decide what header needs to be loaded.
	 */
	public function before()
	{
		
		parent::before();

		
		$this->template->header = View::forge('site/header');
		$this->template->footer = View::forge('site/footer');
	}
	
}