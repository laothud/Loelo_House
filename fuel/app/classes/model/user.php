<?php

class Model_User extends Orm\Model
{
	/**
	 *
	 */

	protected static $_table_name = '_users';

	protected static $_properties = array(
		'id',
		'name',
		'password', 
		'quote',
    );

    public static function get_results()
    {
		return static::query()->order_by('name')->get();
    }

    public static function get_one($name)
    {
    	return static::query()->where('name',$name)->get_one();
    }
}