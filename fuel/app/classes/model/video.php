<?php

class Model_Video extends Orm\Model
{
	/**
	 *
	 */
	protected static $_properties = array(
		'id',
		'videocode',
		'userid', 
		'created_at',
		'username',
    );

    protected static $_observers = array(
	    'Orm\\Observer_CreatedAt' => array(
	        'events' => array('before_insert'),
	        'mysql_timestamp' => true,
	    ),
	);

    public static function get_results()
    {
		return static::query()->order_by('created_at', 'desc')->get();
    }

    public static function get_one($videoid)
    {
    	return static::query()->where('id',$videoid)->get_one();
    }

    public static function get_by_username($username)
    {
    	return static::query()->where('username', '=', $username)->order_by('created_at', 'desc')->get();
    }

}