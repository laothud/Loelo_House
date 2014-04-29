<?php

/**
 * 
 */
abstract class Controller_App extends Controller_Template
{
	/**
	 * 
	 */
	public function before()
	{
		
		parent::before();

		
		$this->template->header = View::forge('site/header');
		$this->template->footer = View::forge('site/footer');
	}
	
}